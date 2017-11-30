<?php

namespace colocation;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['climatiseur','gazDeVille','chaufageCentral','ascenseur','jardin','wifi',
    'parking','balcon','local_id',];
    
    public function local_bl_equipement(){
        return $this->belongsTo(Local::class, 'local_id', 'id');
    }
}
