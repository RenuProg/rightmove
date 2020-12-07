<?php

namespace Database\Factories;

use App\Models\SendQuery;
use Illuminate\Database\Eloquent\Factories\Factory;

class SendQueryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SendQuery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'email' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'message' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
