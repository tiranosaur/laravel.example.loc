<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function index($userRole=3)
    {
        //  find all user with remember_token == 3
        $result = $this->userService->findByRole($userRole);
        return response()->json($result);
    }
}
