<?php

namespace App\Http\Controllers\Acomodation;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

#MODELS
use App\Cnpj as HotelModel;

class DetailController extends Controller
{
    public function detail($id) {
        $accommodation = HotelModel::find($id);
        return view('acomodation.acomodation-detail', ['accommodation' => $accommodation]);
    }
}
