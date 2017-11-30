<?php

namespace colocation;

use Illuminate\Database\Eloquent\Model;

class Colocataire extends Model
{
    protected $fillable = ['budget','peremetres','description','profession_prefer','sitation','user_id',];
    protected $dates = ['created_at', 'updated_at'];
    public function user_bl_colocation(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
