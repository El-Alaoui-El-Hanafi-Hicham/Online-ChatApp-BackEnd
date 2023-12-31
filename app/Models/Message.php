<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    protected $fillable=[
        "conversation_id",
        "sender_id",
        "content"
            ];
            /**
             * Get the user that owns the Message
             *
             * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
             */
            public function user(): BelongsTo
            {
                return $this->belongsTo(User::class, 'sender_id', 'id');
            }
}
