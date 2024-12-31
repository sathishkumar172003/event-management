<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Event;
use App\Models\User;


class Attendee extends Model
{
   
    protected $fillable = ['user_id'];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event() : BelongsTo {
        return $this->belongsTo(Event::class);
    }

}
