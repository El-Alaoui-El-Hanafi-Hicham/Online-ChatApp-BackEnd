<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participants extends Model
{
    use HasFactory;
    protected $fillable=[
        "conversation_id",
        "user_id"
            ];


            /**
             * Get all of the comments for the Participants
             *
             * @return \Illuminate\Database\Eloquent\Relations\HasMany
             */
            public function Conversation(): HasMany
            {
                return $this->hasMany(Conversation::class, 'id', 'conversation_id');
            }
            public function User(): BelongsTo
            {
                return $this->belongsTo(User::class);
            }
}
