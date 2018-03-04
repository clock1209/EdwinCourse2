<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        factory(User::class)->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
        ]);

        factory(User::class, 10)->create();
    }
}
