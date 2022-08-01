<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamManager;
use App\Models\TeamDetail;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['tm_id','team_name' ];

    public function teamManager(){
        return $this->belongsTo(TeamManager::class);
    }
    public function teamDetails(){
        return $this->hasMany(TeamDetail::class);
    }
}
