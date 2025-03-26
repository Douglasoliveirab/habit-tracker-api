<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            "Acordar cedo",
            "Beber água regularmente",
            "Praticar exercícios físicos",
            "Ler diariamente",
            "Dormir bem",
            "Manter uma alimentação saudável",
            "Meditar",
            "Ser grato diariamente",
            "Planejar o dia",
            "Evitar o uso excessivo de redes sociais"
        ];

        return [
            'user_id' => User::factory(),
            'uuid' => fake()->uuid(),
            'title' => fake()->randomElement($habits)

        ];
    }
}
