<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
   protected $table = 'timetable';
   public $timestamps = false;
   public $incrementing = false;

   public function Beschikbaar(){
    return $this->belongsTo('\App\Models\Timetable', 'telefoonnummer', NULL);
    }
}