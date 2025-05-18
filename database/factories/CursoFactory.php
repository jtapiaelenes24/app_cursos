<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition(): array
    {

        $name = $this->faker->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo', 'Diseño'])
        ];
    }
}
