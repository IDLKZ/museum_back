<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->word,
        'alias' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'title_en' => $this->faker->word,
        'title_de' => $this->faker->word,
        'title_fr' => $this->faker->word,
        'title_es' => $this->faker->word,
        'title_tr' => $this->faker->word,
        'description_ru' => $this->faker->text,
        'description_en' => $this->faker->text,
        'description_kz' => $this->faker->text,
        'description_de' => $this->faker->text,
        'description_fr' => $this->faker->text,
        'description_es' => $this->faker->text,
        'description_tr' => $this->faker->text,
        'pricing_ru' => $this->faker->text,
        'pricing_en' => $this->faker->text,
        'pricing_kz' => $this->faker->text,
        'pricing_de' => $this->faker->text,
        'pricing_fr' => $this->faker->text,
        'pricing_es' => $this->faker->text,
        'pricing_tr' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
