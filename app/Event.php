<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $fillable = ["event_title", "event_description", "event_start", "event_end", 
    "photo", "takeaway"];
}
