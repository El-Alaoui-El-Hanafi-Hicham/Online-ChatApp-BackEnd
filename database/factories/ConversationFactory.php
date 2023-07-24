<?php

namespace Database\Factories;



use App\Models\Conversation;
use App\Models\Participants;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConversationFactory extends Factory
{
    protected $model = Conversation::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Conversation $conversation) {
            // Get two random participants
            $participants = Participants::inRandomOrder()->limit(2)->get();

            // Attach the participants to the conversation
            $conversation->participants()->attach($participants);
        });
    }
}

