<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Игорь Петрович Электросамокатов',
                'email' => 'first@mail.ru',
                'password' => bcrypt('secret'),
            ],[
                'name' => 'Ольга Олеговна Инстаграмова',
                'email' => 'second@mail.ru',
                'password' => bcrypt('secret'),
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create($userData);
            $user->save();
            $user->createToken('api');
        }
    }
}
