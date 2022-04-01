<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            'name'       => 'Quản Trị Viên',
            'email'      => 'admin@gmail.com',
            'password'   => bcrypt(123456789),
            'phone'      => '0986420994',
            'address'    => 'Thanh Hoá',
            'created_at' => Carbon::now()
        ]);
    }
}
