<?php

namespace Database\Factories;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence( 5, true );
        $slug = Str::substr( Str::lower( preg_replace( '/\s+/', '', $title ) ), 0, -1 );

        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $this->faker->paragraph( 50, false ),
            'img' => 'https://via.placeholder.com/500/333/fff/?text=' . $title,
            'published_at' => Carbon::now(),
            'created_at' => $this->faker->dateTimeBetween( '-1 years' )
        ];
    }
}
