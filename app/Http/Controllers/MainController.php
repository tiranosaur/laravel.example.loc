<?php


namespace App\Http\Controllers;


use App\Http\Requests\VerificationRequest;
use App\Notifications\EmailVerifyNotifications;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function index()
    {
        $aa = 1;
    }

    public function registration()
    {
        $user = User::create([
            'name'              => 'Test',
            'email'             => 'tiranosaur88@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('qweqwe'), // password
            'remember_token'    => Hash::make(Carbon::now()),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        Notification::send($user, new EmailVerifyNotifications($user));
    }

    public function verification(VerificationRequest $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('remember_token', $request->input('remember_token'))
            ->first();
        $user->email_verified_at = Carbon::now();
        $user->save();

        if (!is_null(auth()->user())) {
            auth()->logout();
        }
        //login by jwt auth
    }
}
