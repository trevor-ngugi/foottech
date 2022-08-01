<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class TeamDetail extends Model
{
    use HasFactory;
    protected $fillable = ['playerName', 'position', 'teamFk_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
   
}
