<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable=[
"name"
    ];
    /**
     * The participant that belong to the Conversation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants(): HasMany
    {
        return $this->hasMany(Participants::class);

    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
