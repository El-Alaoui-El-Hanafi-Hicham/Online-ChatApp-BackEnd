<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "conversation_id"=>$this->faker->numberBetween(0,100), 
"sender_id"=>$this->faker->numberBetween(0,20), 
"content"=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
