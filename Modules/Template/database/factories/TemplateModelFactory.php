<?php

namespace Modules\Template\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Template\Models\TemplatesModel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

