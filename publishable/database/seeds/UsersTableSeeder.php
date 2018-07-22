<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $data = array(
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin'),
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ],
                
        );
        DB::table('users')->insert($data);
    }
}
