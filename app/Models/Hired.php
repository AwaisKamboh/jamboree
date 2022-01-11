<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hired extends Model
{
    use HasFactory;

    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'proposal_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
