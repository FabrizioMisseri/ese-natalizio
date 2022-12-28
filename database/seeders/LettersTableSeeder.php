<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $letters = new Letter();
            $letters->name = $faker->firstName();
            $letters->lastname = $faker->lastName();
            $letters->address = $faker->address();
            $letters->city = $faker->city();
            $letters->arrival_date = $faker->dateTimeInInterval('-1 week', '+1 week');
            $letters->gift = $faker->randomElement(['giocattoli', 'vestiti', 'droga', 'porno', 'cagne', ' cura della persona']);
            $letters->letter_text = $faker->paragraph();
            $letters->rating = $faker->numberBetween(1, 5);
            $letters->is_delivered = $faker->numberBetween(0, 1);
            $letters->save();
        }
    }
}
