<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /*
		IDADE

			1- 1 a 3
    		2- 4 a 6
    		3- 7 a 10
    		4- Maior de 10


		PORTE
			1- Pequeno
    		2- Médio
    		3- Grande


    	VACINA
    		1- Sim
    		2- Não
    */

    protected $fillable = [
        'user_id', 'name_pet', 'breed_pet', 'porte_pet', 'idade_pet', 'vacina_pet'
    ];
}
