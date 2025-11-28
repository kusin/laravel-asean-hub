<?php

namespace Database\Factories;

use App\Models\Voters;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class VotersFactory extends Factory
{
    protected $model = Voters::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');

        return [
            'ip_address'        => $this->faker->ipv4(),
            'mac_address'       => $this->faker->macAddress(),
            'voters_name'       => $this->faker->name(),
            'voters_job'        => $this->faker->jobTitle(),
            'voters_email'      => $this->faker->unique()->safeEmail(),
            'voters_password'   => '12341234',
            'status_data'       => 'Active',
        ];
    }
}
