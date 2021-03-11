<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->lastName,
            "surname"=>$this->faker->firstName,
            "age"=>$this->faker->numberBetween(15, 40),
            "phone"=>$this->faker->e164PhoneNumber,
            "email"=>$this->faker->email,
            "gender"=>$this->faker->title,
            "country"=>$this->faker->country,
            // "position"=>$this->faker->firstName,
            "team_id"=>$this->faker->numberBetween(0, 10),
            
        ];
    }
}
