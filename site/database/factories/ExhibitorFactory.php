<?php

namespace Database\Factories;

use App\Models\Exhibitor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExhibitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exhibitor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        $workTitle = [
            'Agriculteur',
            'Cultiveur',
            'Viticulteur',
            'Récolteur',
            'Boucher',
        ];
        $randNumb = rand(1, count($workTitle)) - 1;

        $work = $workTitle[$randNumb];

        return [
            'full_name' => $name,
            'slug' => Str::slug($name),
            'work_title' => $work,
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->unique()->phoneNumber,
            'confirmed' => true,
        ];
    }
}
