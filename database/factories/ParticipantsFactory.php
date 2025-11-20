<?php

namespace Database\Factories;

use App\Models\Participants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ParticipantsFactory extends Factory
{
    protected $model = Participants::class;
    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');
        return [
            'team_name'                     => $this->faker->company,
            'participants_name_1'           => $this->faker->name,
            'participants_name_2'           => $this->faker->name,
            'participants_name_3'           => $this->faker->name,
            'participants_name_4'           => $this->faker->name,
            'participants_name_5'           => $this->faker->name,
            'participants_contact_person'   => $this->faker->numerify('08##-####-####'),
            'participants_email'            => $this->faker->unique()->safeEmail(),
            'participants_password'         => Hash::make('12341234'),
            'status_data'                   => 'Aktif',  // Status default

        ];
    }
}
