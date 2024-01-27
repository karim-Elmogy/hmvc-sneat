<?php

namespace Core\Test\Database\Factories;

use Core\Test\Models\Unit as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hwya' => $this->faker->text(100),

        ];
    }
}
