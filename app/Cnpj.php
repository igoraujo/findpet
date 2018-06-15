<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cnpj extends Model
{

	/*
		Cidade
			1- Belo Horizonte
	    	2- Manaus
	    	3- Rio de Janeiro
	    	4- São Paulo
	*/


	protected $table = 'cnpj';

	protected $fillable = [
		'user_id', 'nome', 'descricao', 'cidade', 'porte_pet', 'foto'
	];

	public function user() {
		return $this->belongsTo('App\User');
	}
}
