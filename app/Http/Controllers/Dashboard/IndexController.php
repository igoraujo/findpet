<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

#MODELS
use App\Pet as PetModel;

use App\Reserve as ReserveModel;


class IndexController extends Controller
{
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            return redirect(route('admin::index'));
        }


        if (Auth::user()->isCnpj()) {
            return redirect(route('index.comodation'));
        }

        $pets = PetModel::where('user_id', Auth::id())->get();

        return view('dashboard.index', ['pets' => $pets]);
    }

    public function registerPet(Request $request) {
        $user_id = Auth::id();

        $data = $request->all();

        PetModel::create(['name_pet' => $data['name_pet'], 'breed_pet' => $data['breed_pet'], 'porte_pet' => $data['porte_pet'], 'idade_pet' => $data['idade_pet'], 'vacina_pet' => $data['vacina_pet'], 'user_id' => $user_id]);

        return redirect()->action('Dashboard\IndexController@index');
    }

    public function reserve() {
    	$reservas = ReserveModel::where('user_id', Auth::id())->get();

        return view('dashboard.reserve', ['reservas' => $reservas]);
    }
}
