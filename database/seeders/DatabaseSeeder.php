<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        // $this->run([
        //     RolePermissionSeeder::class,
        // ]);

        // if (User::where('email', 'iftekhermahmud@gmail.com')->first()) {
        //     $super_admin = User::factory()->create([
        //         'name' => 'Iftekher Mahmud Pervez',
        //         'email' => 'iftekhermahmud@gmail.com',
        //         'password' => Hash::make('21082002')
        //     ]);
        //     $super_admin->syncRoles('super admin');
        // }

        // if (User::where('email', 'parvezkhan@gmail.com')->first()) {
        //     $admin = User::factory()->create([
        //         'name' => 'Iftekher Mahmud',
        //         'email' => 'parvezkhan@gmail.com',
        //         'password' => Hash::make('21082002')
        //     ]);
        //     $admin->syncRoles('admin');
        // }

        // if (User::where('email', 'parvez@gmail.com')->first()) {

        //     $user = User::factory()->create([
        //         'name' => 'Iftekher Mahmud',
        //         'email' => 'parvez@gmail.com',
        //         'password' => Hash::make('21082002')
        //     ]);
        //     $user->syncRoles('user');
        // }
    }
}
