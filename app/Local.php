<?php

namespace colocation;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['titre','adresse','gouvernorat','type_proporiete','type_chambre',
    'nbr_chambre','prix','surface','description','image','meublee','nbr_places','occ_preferee','age_min',
    'age_max','user_id',];
    protected $dates = ['created_at', 'updated_at'];
    public function user_bl_colocation(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
