<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            $users = $this->createUsers();

            $this->createUserProfile();

            $this->createRolesAndPermissions($users);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th; // This will help you identify the error if something goes wrong
        }
    }

    public function createRolesAndPermissions($users)
    {
        // Membuat role
        $role_admin = Role::firstOrCreate(['name' => 'administrator', 'guard_name' => 'web']);
        $role_staff = Role::firstOrCreate(['name' => 'staff', 'guard_name' => 'web']);
        $role_member = Role::firstOrCreate(['name' => 'member', 'guard_name' => 'web']);

        // Daftar izin
        $permissions = ['read', 'create', 'update', 'delete'];
        $modulesWithFullPermissions = ['configurations', 'permissions', 'roles', 'navigation', 'users', 'settings', 'dashboard', 'guests'];

        // Memberikan izin penuh untuk module-module tertentu
        foreach ($modulesWithFullPermissions as $module) {
            foreach ($permissions as $permission) {
                $permissionName = "{$permission} {$module}";
                $permissionInstance = Permission::firstOrCreate(['name' => $permissionName]);

                // Memberikan izin kepada role admin
                $role_admin->givePermissionTo($permissionInstance);
            }
        }

        // memberikan izin kepada member
        $memberPermissions = ['guests'];
        foreach ($memberPermissions as $permission) {
            foreach ($permissions as $permission) {
                $permissionName = "{$permission} {$module}";
                $permissionInstance = Permission::firstOrCreate(['name' => $permissionName]);

                // Memberikan izin kepada role member
                $role_member->givePermissionTo($permissionInstance);
            }
        }

        // Menugaskan role ke pengguna
        if (isset($users['administrator'])) {
            $users['administrator']->assignRole($role_admin);
        }
        if (isset($users['staff'])) {
            $users['staff']->assignRole($role_staff);
        }
        if (isset($users['member'])) {
            $users['member']->assignRole($role_member);
        }
    }

    public function createUsers()
    {
        $result = [];

        $result['administrator'] = User::create([
            'name' => 'Rama Can',
            'email' => 'admin@gmail.com',
            'username' => 'ramacan',
            'email_verified_at' => now(),
            'password' => Hash::make('Tetap10jam.'),
            'remember_token' => Str::random(10),
            'is_active' => 1,
        ]);

        $result['staff'] = User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'username' => 'staff',
            'email_verified_at' => now(),
            'password' => Hash::make('Tetap10jam.'),
            'remember_token' => Str::random(10),
            'is_active' => 1,
        ]);

        $result['member'] = User::create([
            'name' => 'Asep',
            'email' => 'aseptea@gmail.com',
            'username' => 'aseptea',
            'email_verified_at' => now(),
            'password' => Hash::make('aseptea123'),
            'remember_token' => Str::random(10),
            'is_active' => 1,
        ]);

        return $result;
    }

    public function createUserProfile()
    {
        $admin = User::where('email', 'admin@gmail.com')->first();
        if ($admin) {
            $admin->profile()->create([
                'phone_number' => '089678468651',
                'place_birth' => 'Jakarta',
                'date_birth' => '1991-04-05',
                'gender' => 'laki-laki',
                'address' => 'Jl. H. Gadung no.20, Pondok Ranji, Ciputat Timur, Tangerang Selatan, Banten',
            ]);
        }

        $staff = User::where('email', 'staff@gmail.com')->first();
        if ($staff) {
            $staff->profile()->create([
                'phone_number' => '08123456799',
                'place_birth' => 'Bogor',
                'date_birth' => '1994-01-01',
                'gender' => 'laki-laki',
                'address' => 'Jalan Bogor Raya No. 19',
            ]);
        }

        $student = User::where('email', 'aseptea@gmail.com')->first();
        if ($student) {
            $student->profile()->create([
                'phone_number' => '08123456789',
                'place_birth' => 'Bogor',
                'date_birth' => '1990-11-21',
                'gender' => 'laki-laki',
                'address' => 'Jalan Bogor Utara No. 123',
            ]);
        }
    }
}
