<?php

namespace Database\Seeders;

use App\Models\Navigation;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataNavigations = [
            // [
            //     'name' => 'Configurations',
            //     'url' => '#',
            //     'permission' => 'configurations',
            //     'icon' => 'ti-settings',
            //     'main_menu' => null,
            //     'type_menu' => 'parent',
            // ],
            // [
            //     'name' => 'App Settings',
            //     'url' => 'admin/application-settings',
            //     'permission' => 'settings',
            //     'icon' => '',
            //     'main_menu' => 1,
            //     'type_menu' => 'child',
            // ],
            // [
            //     'name' => 'Roles',
            //     'url' => 'admin/roles',
            //     'permission' => 'roles',
            //     'icon' => '',
            //     'main_menu' => 1,
            //     'type_menu' => 'child',
            // ],
            // [
            //     'name' => 'Permissions',
            //     'url' => 'admin/permissions',
            //     'permission' => 'permissions',
            //     'icon' => '',
            //     'main_menu' => 1,
            //     'type_menu' => 'child',
            // ],
            // [
            //     'name' => 'Navigation',
            //     'url' => 'admin/navigations',
            //     'permission' => 'navigations',
            //     'icon' => '',
            //     'main_menu' => 1,
            //     'type_menu' => 'child',
            // ],
            [
                'name' => 'Guests',
                'url' => 'admin/guests',
                'permission' => 'guests',
                'icon' => 'fas fa-user',
                'main_menu' => null,
                'sort' => 1,
                'type_menu' => 'single',
            ],
        ];

        foreach ($dataNavigations as $dataNavigation) {
            Navigation::create($dataNavigation);
        }

        $adminRole = Role::firstOrCreate(['name' => 'administrator']);

        // Mendapatkan ID peran "admin"
        $adminRoleId = $adminRole->id;

        // Mendapatkan semua navigasi
        $navigations = Navigation::all();

        // Melampirkan peran "admin" ke setiap navigasi
        foreach ($navigations as $navigation) {
            $navigation->roles()->syncWithoutDetaching([$adminRoleId]);
        }
    }
}
