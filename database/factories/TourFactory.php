<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hall_id' => $this->faker->word,
        'prev_tour' => $this->faker->word,
        'next_tour' => $this->faker->word,
        'image' => $this->faker->word,
        'alias' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'title_en' => $this->faker->word,
        'title_de' => $this->faker->word,
        'title_fr' => $this->faker->word,
        'title_es' => $this->faker->word,
        'title_tr' => $this->faker->word,
        'audio_ru' => $this->faker->word,
        'audio_kz' => $this->faker->word,
        'audio_en' => $this->faker->word,
        'audio_de' => $this->faker->word,
        'audio_fr' => $this->faker->word,
        'audio_es' => $this->faker->word,
        'audio_tr' => $this->faker->word,
        'video_ru' => $this->faker->word,
        'video_kz' => $this->faker->word,
        'video_en' => $this->faker->word,
        'video_de' => $this->faker->word,
        'video_fr' => $this->faker->word,
        'video_es' => $this->faker->word,
        'video_tr' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
