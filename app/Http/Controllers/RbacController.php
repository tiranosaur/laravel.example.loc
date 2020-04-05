<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RbacController extends Controller
{
    public function getRole()
    {
        // ./artisan permission:show
        return response()->json(Role::all());
    }

    public function roleAddPermission()
    {
        //https://docs.spatie.be/laravel-permission/v3/basic-usage/basic-usage/
        //create role
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        //create permission
        $perm1 = Permission::create(['name' => 'main.index']);
        $perm2 = Permission::create(['name' => 'main.delete']);

        //sync role to permission or perm to role
        /*
            $role->syncPermissions($permissions);
            $permission->syncRoles($roles);
         */
        $roleAdmin->syncPermissions([$perm1, $perm2]);
        $roleUser->syncPermissions([$perm1, $perm2]);

        //remove perm from role
        /*
            $role->revokePermissionTo($permission);
            $permission->removeRole($role);
        */
//        $roleUser->revokePermissionTo($perm1);
        $roleUser->revokePermissionTo($perm2);
        return response()->json(Role::all());
    }

    public function userAddPermission()
    {
        //  https://docs.spatie.be/laravel-permission/v3/basic-usage/direct-permissions/
        //add permission to user
        $users = User::all();
        foreach ($users as $user) {
            if ($user->id % 2 != 0) {
                //admin add permission
                $user->givePermissionTo(['main.index', 'main.delete']);
            } else {
                $user->givePermissionTo(['main.index']);
            }
        }
    }

    public function userAddRole()
    {
        //  https://docs.spatie.be/laravel-permission/v3/basic-usage/role-permissions/
        //add role to user
        $users = User::all();
        foreach ($users as $user) {
            if ($user->id % 2 != 0) {
                //admin add permission
                $user->assignRole(['admin']);
            } else {
                $user->assignRole(['user']);
            }
        }
    }
}
