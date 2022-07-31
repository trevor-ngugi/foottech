<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class TeamManager extends Model
{
    use HasFactory;
    protected $fillable = ['name','age' ];

    public function team(){
        return $this->hasOne(Team::class);
    }
}
