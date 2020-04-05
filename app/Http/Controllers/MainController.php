<?php

namespace App\Http\Controllers;


use App\User;
use Spatie\Permission\Models\Role;

class MainController extends Controller
{
    public function index()
    {
        $user = \App\User::find(2);
        $aa = $user->can('main.index');
        $bb = $user->can('main.delete');
        return response()->json(['status' => __CLASS__.': welcome']);
    }

    public function delete()
    {
        return response()->json(['status' => 'DELETE!']);
    }

    public function addRolePermission(){
        $user = User::find(1);

    }
}
