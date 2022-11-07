<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'title' => 'Bentley Continental',
            'number' => 'ВО777Р',
        ]);

        Car::create([
            'title' => 'BMW X-6',
            'number' => 'ВО666Р',
        ]);

        Car::create([
            'title' => 'Dodge Viper',
            'number' => 'ВО555Р',
        ]);

        Car::create([
            'title' => 'Ferrari 488 GTB',
            'number' => 'РУ444В',
        ]);

        Car::create([
            'title' => 'Toyota Land Cruiser 200',
            'number' => 'МУ333В',
        ]);
    }
}
