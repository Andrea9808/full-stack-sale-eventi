<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaMeeting extends Model
{
    use HasFactory;

    //ogni SalaMeeting può avere molti Eventi
    public function events()
    {
        return $this->hasMany(Evento::class);
    }
}
