<?php

namespace Database\Factories;

use App\Models\FAQ;
use Illuminate\Database\Eloquent\Factories\Factory;

class FAQFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FAQ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_ru' => $this->faker->word,
        'question_en' => $this->faker->word,
        'question_kz' => $this->faker->word,
        'question_de' => $this->faker->word,
        'question_fr' => $this->faker->word,
        'question_es' => $this->faker->word,
        'question_tr' => $this->faker->word,
        'answer_ru' => $this->faker->text,
        'answer_en' => $this->faker->text,
        'answer_kz' => $this->faker->text,
        'answer_de' => $this->faker->text,
        'answer_fr' => $this->faker->text,
        'answer_es' => $this->faker->text,
        'answer_tr' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
