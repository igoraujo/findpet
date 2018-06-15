<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
    	'user_id', 'pet_id', 'cnpj_id'
    ];

    public function pet() {
    	return $this->belongsTo('App\Pet');
    }

    public function hotel() {
    	return $this->belongsTo('App\Cnpj', 'cnpj_id');
    }
}
