<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
        [
            'name' => 'sri',
            'email' => 'sridyhwd@gmail.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Indramayu',
            'telepon' => '0987654321',
            'image' => 'default.png',
            'role' => 'super-admin'
        ],
        [
            'name' => 'sri',
            'email' => 'sridyh@gmail.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Indramayu',
            'telepon' => '0987654321',
            'image' => 'default.png',
            'role' => 'admin'
        ],
        [
            'name' => 'sri',
            'email' => 'sri@gmail.com',
            'password' => bcrypt('admin123'),
            'alamat' => 'Indramayu',
            'telepon' => '0987654321',
            'image' => 'default.png',
            'role' => 'budidaya'
        ],
    ];

        User::insert($users);
    }
}
