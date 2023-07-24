<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        
            // ConversationSeeder::class,
            // // ParticipantsSeeder::class,
            // MessageSeeder::class,
            Conversation::factory()
            ->count(10)
            ->has(Message::factory()->count(20), 'messages')
            ->create();
   
    }
}
