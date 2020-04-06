<?php


namespace App\Http\Controllers;


use App\Permission;
use App\User;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();
//        $permission = Permission::where('name', 'show-user')->first();
//        $user->attachPermission($permission);

//        $permission = Permission::where('name', 'show-user')->first();
//        $user->detachPermission($permission);
        return response()->json(User::all(), 200);
    }

    public function createPermission()
    {

        $permission = new Permission();
        $permission->name = 'show-user';
        $permission->display_name = 'Show users';
        $permission->description = 'Show all user from database';
        $permission->save();
        return response()->json(['status' => true, 'message' => 'created successfully']);
    }

    public function addPermissionToUser()
    {
        $route = Route::current();
        $user = auth()->user();
        $permission = Permission::where('name', $route->getName())->first();
        $user->attachPermission($permission);
    }
}
