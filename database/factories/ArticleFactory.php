<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'nom'=>$faker->unique()->text(50),
            'descripcio'=>$faker->paragraph(3),
            'preu_compra'=>$faker->randomFloat(2,100,1000),
            'preu_venta'=>$faker->randomFloat(2,1100,2000),
            'enviament_domicili'=>$faker->randomElement(['S','N']),
            'stock'=>$faker->numberBetween(0,6000),
            'observacions'=>$faker->optional()->paragraph(4),
        ];
    }
}
