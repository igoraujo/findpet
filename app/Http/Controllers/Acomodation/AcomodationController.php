<?php

namespace App\Http\Controllers\Acomodation;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

#MODELS
use App\Pet as PetModel;
use App\Cnpj as HotelModel;
use App\Reserve as ReserveModel;

class AcomodationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Redirect to the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_id = Auth::id();

        $accommodations = HotelModel::where('user_id', $user_id)->get();
        return view('dashboard.acomodation_index', ['accommodations' => $accommodations]);
    }

    public function indexRegister() {
        return view('acomodation.register');
    }

    public function register(Request $request) {
        $data = $request->all();

        $user_id = Auth::id();

        HotelModel::create(['user_id' => $user_id, 'nome' => $data['nome'], 'descricao' => $data['descricao'] , 'cidade' => $data['cidade'], 'porte_pet' => $data['porte_pet'], 'foto' => $data['foto']]);

        return redirect()->action('Acomodation\AcomodationController@index');
    }

    public function reserveIndex($id) {
        $hotel = HotelModel::find($id);

        $pets = PetModel::where('user_id', Auth::id())->get();

        $lista_pets = [];
        foreach ($pets as $pet) {
            if($pet->porte_pet <= $hotel->porte_pet){
                $lista_pets[] = $pet;
            }
        }

        return view('acomodation.reserve', ['accommodation' => $hotel, 'pets' => $lista_pets]);
    }

    public function reserveConfirmation($hotel_id, $pet_id) {
        ReserveModel::create(['cnpj_id' => $hotel_id, 'pet_id' => $pet_id, 'user_id' => Auth::id()]);

        return redirect()->action('Dashboard\IndexController@reserve');
    }
}
