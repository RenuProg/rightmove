<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_type_id' => $this->faker->word,
        'property_sub_type_id' => $this->faker->word,
        'property_title' => $this->faker->word,
        'total_area' => $this->faker->word,
        'builtup_area' => $this->faker->word,
        'carpet_area' => $this->faker->word,
        'localtion' => $this->faker->word,
        'price' => $this->faker->word,
        'bathroom_id' => $this->faker->word,
        'bedroom_id' => $this->faker->word,
        'balcony_id' => $this->faker->word,
        'floor_id' => $this->faker->word,
        'about_property' => $this->faker->word,
        'image' => $this->faker->word,
        'is_active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
