<?php
use App\Fumetti;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $data = [
                'title' => $faker->word,
                'author' => $faker->name,
                'year' => $faker->year,
                'review' => $faker->text,
                'vote' => $faker->numberBetween($min=0, $max=10) 
            ];

            $fumetto = new Fumetti;
            $fumetto->fill($data);
            $fumetto->save();
        }
    }
}
