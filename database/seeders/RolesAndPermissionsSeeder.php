<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // إنشاء صلاحيات
        $manageUsers = Permission::create(['name' => 'manage users']);
        $editPosts = Permission::create(['name' => 'edit posts']);
        $deletePosts = Permission::create(['name' => 'delete posts']);

        // إنشاء أدوار
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $user = Role::create(['name' => 'user']);

        // إعطاء صلاحيات للأدوار
        $admin->givePermissionTo([$manageUsers, $editPosts, $deletePosts]);
        $editor->givePermissionTo([$editPosts]);
        $user->givePermissionTo([]);

        // تعيين دور للمستخدم
        $adminUser = \App\Models\User::find(1); // إذا كان الـ ID للمستخدم هو 1
        $adminUser->assignRole('admin');
    }
}
