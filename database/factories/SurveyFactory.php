<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Survey::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alias' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'title_en' => $this->faker->word,
        'title_de' => $this->faker->word,
        'title_fr' => $this->faker->word,
        'title_es' => $this->faker->word,
        'title_tr' => $this->faker->word,
        'url_ru' => $this->faker->text,
        'url_kz' => $this->faker->text,
        'url_en' => $this->faker->text,
        'url_de' => $this->faker->text,
        'url_fr' => $this->faker->text,
        'url_es' => $this->faker->text,
        'url_tr' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
