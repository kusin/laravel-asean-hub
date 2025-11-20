<?php

namespace Database\Factories;

use App\Models\UrbanDesign;
use App\Models\Participants;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrbanDesignFactory extends Factory
{
    protected $model = UrbanDesign::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');

        return [
            'id_participants'       => Participants::factory(),
            'design_title'          => $this->faker->sentence(4),
            'design_description'    => $this->faker->paragraph(3),
            'design_presentation'   => $this->faker->filePath(),
            'images_1'              => $this->faker->imageUrl(),
            'images_2'              => $this->faker->imageUrl(),
            'images_3'              => $this->faker->imageUrl(),
            'video_native'          => $this->faker->filePath(),
            'video_youtube'         => "https://youtu.be/" . $this->faker->lexify('????????'),
            'noted_best_5'          => 'No',
            'noted_best_10'         => 'No',
            'status_data'           => 'Aktif',
        ];
    }
}
