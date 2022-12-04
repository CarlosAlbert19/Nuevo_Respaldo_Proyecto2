<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medicamento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicamento>
 */
class MedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company(),
            'tipo' => $this->faker->jobTitle()
        ];
    }
}
