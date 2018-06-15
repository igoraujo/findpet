<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#models
use App\Cnpj as HotelModel;

class WelcomeController extends Controller
{
    /**
     * Show the application front.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$accommodations = Hotelmodel::paginate('6');
        return view('welcome', ['accommodations' => $accommodations]);
    }
}
