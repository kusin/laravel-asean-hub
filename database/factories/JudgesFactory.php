<?php

namespace Database\Factories;

use App\Models\Judges;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class JudgesFactory extends Factory
{
    // ...
    protected $model = Judges::class;

    public function definition(): array
    {
        // set lokasi indonesia.
        $this->faker = \Faker\Factory::create('id_ID');

        return [
            'judges_name'           => $this->faker->name(),
            'origin_institution'    => $this->faker->randomElement([
                'IPB University',
                'Institut Teknologi Bandung',
                'Universitas Indonesia',
                'Universitas Gajah Mada',
                'Delft University of Technology',
                'University of Southern California',
            ]),
            'judges_photo'           => '-',
            'judges_email'          => $this->faker->unique()->safeEmail(),
            'judges_password'       => Hash::make('12341234'),
            'status_data'           => 'Aktif',
        ];
    }
}
