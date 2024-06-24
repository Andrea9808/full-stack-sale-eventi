<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    // ogni Evento è associato a una sola SalaMeeting.
    public function salaMeeting()
    {
        return $this->belongsTo(SalaMeeting::class);
    }
}
