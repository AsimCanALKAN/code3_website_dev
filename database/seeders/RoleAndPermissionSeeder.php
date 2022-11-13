<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'use_actions']);
        Permission::create(['name' => 'apply_filter_live']);
        Permission::create(['name' => 'apply_filter_history']);

        Permission::create(['name' => 'see_live_trade']);
        Permission::create(['name' => 'see_profile_page']);
        Permission::create(['name' => 'edit_profile_page']);

        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Moderator']);
        $guestRole = Role::create(['name' => 'Guest']);

        $adminRole->givePermissionTo([
            'use_actions',
            'edit_profile_page',
            'apply_filter_live',
            'apply_filter_history',
            'see_live_trade',
            'see_profile_page',
            'edit_profile_page',
        ]);

        $editorRole->givePermissionTo([
            'apply_filter_live',
            'apply_filter_history',
            'see_live_trade',
            'see_profile_page',
        ]);

        $guestRole->givePermissionTo([
            'apply_filter_history',
        ]);
    }
}