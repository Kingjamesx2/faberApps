<?php

namespace Modules\LandTracker\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\LandTracker\Models\Documents::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

