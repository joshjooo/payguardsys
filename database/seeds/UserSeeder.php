<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $name = 'admin';
        $email = 'admin@admin.com';
        $password= 123456789;
        $mobile = 9999999999;

        $users = User::where('user_email',$email);

       
            $user = User::create([
            'user_name' => $name,
            'user_email' => $email,
            'user_password' => Hash::make($password),
            'user_mobile' => $mobile,
           
        ]);
    
}
}
