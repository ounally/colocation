<?php

namespace colocation;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $fillable = ['genre','animaux','tabac','profession','age_min','age_max','local_id',];
    
    public function local_bl_equipement(){
        return $this->belongsTo(Local::class, 'local_id', 'id');
    }
}
