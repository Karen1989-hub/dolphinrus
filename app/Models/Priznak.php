<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priznak extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getOption(){
        return $this->hasMany(Option::class,'priznak_id','priznak_id');
    }
}
