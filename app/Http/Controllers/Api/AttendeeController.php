<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendeeResource;
use Illuminate\Http\Request;

use App\Models\EVent;
use App\Models\Attendee;



class AttendeeController extends Controller
{

    public function index(Event $event)
    {
        $attendees = $event->load('attendees')->attendees;
        return AttendeeResource::collection($attendees);
    }

    public function store(Request $request, Event $event)
    {
        $new_attendee = $event->attendees()->create([
            'user_id' => 1,
        ]);
        
        return new AttendeeResource($new_attendee);
        
    }

    public function show(Event $event, Attendee $attendee)
    {
        return new AttendeeResource($attendee);
    }

    public function destroy(Event $event, Attendee $attendee)
    {
        $attendee->delete();
        return response(status: 204);  
    }
}
