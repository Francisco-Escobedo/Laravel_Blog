<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->email = 'franciscoeescobedo@gmail.com';
        $user->username = 'fescobed';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->city = 'San Antonio';
        $user->state = 'Texas';
        $user->phone = '(210) 216-2025';
        $user->gender = 'Male';
        $user->save();

        $user = new User();
        $user->email = 'calebsebastian@gmail.com';
        $user->username = 'csebas';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->city = 'Madison';
        $user->state = 'Wisconsin';
        $user->phone = '(210) 218-6612';
        $user->gender = 'Male';
        $user->save();

        $user = new User();
        $user->email = 'diegovicente@gmail.com';
        $user->username = 'dvicente';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->city = 'Boerne';
        $user->state = 'Texas';
        $user->phone = '(210) 342-3558';
        $user->gender = 'Male';
        $user->save();

        $user = new User();
        $user->email = 'morganfisler@gmail.com';
        $user->username = 'mfisler';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->city = 'Austin';
        $user->state = 'Texas';
        $user->phone = '(512) 909-2105';
        $user->gender = 'Female';
        $user->save();
    }
}
