<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\User;
use App\Models\Attendee;



class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;


    protected $fillable = ['name', 'description', 'start_time', 'end_time', 'user_id'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function attendees():HasMany{
        return $this->hasMany(Attendee::class);
    }
}
