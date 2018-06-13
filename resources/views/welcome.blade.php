@extends('layouts.frontend')

{{-- Page Title --}}
@section('page-title', 'Welcome')

{{-- Page Subtitle --}}
@section('page-subtitle', '')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    
@endsection

@section('content')
	<div class="col-md-12">
		<input type="text" class="form-control" placeholder="Procurar por Hoteis">
	</div>
	<br>
	<br>
    <div class="col-md-12">
    	<div class="row">
    		<div class="col-md-6">
    			<img class="img-responsive" src="https://images.pexels.com/photos/316776/pexels-photo-316776.jpeg?auto=compress&cs=tinysrgb&h=650&w=940">
    		</div>
    		<div class="col-md-6">
				<div class="row">
					<h2>Nome acomodação</h2>
					<p>Hotelaria HotDog</p>
				</div>
				<div class="row">
					<h2>Descrição:</h2>
					<p>Hotel perfeito para animais de pequeno porte!</p>
				</div>
				<div class="row">
					<h2>Localização</h2>
					<p>Rua Centralina, 710 - Novo Hamburgo / RS</p>
				</div>
				<div class="row">
					<a href="{{route('detail.acomodation')}}" class="btn btn-warning" > Visualizar</a>
					<a href="{{route('reserve.acomodation')}}" class="btn btn-success" > Reservar</a>
		        </div>
			</div>
		</div>
		<br>
		<div class="row">
    		<div class="col-md-6">
    			<img class="img-responsive" src="https://images.pexels.com/photos/206673/pexels-photo-206673.jpeg?auto=compress&cs=tinysrgb&h=650&w=940">
    		</div>
    		<div class="col-md-6">
				<div class="row">
					<h2>Nome acomodação</h2>
					<p>Ouro Pet</p>
				</div>
				<div class="row">
					<h2>Descrição:</h2>
					<p>Atendemos pets de qualquer porte!</p>
				</div>
				<div class="row">
					<h2>Localização</h2>
					<p>Rua x, 330 - Vitória / ES</p>
				</div>
				<div class="row">
					<a href="{{route('detail.acomodation')}}" class="btn btn-warning">Visualizar</a>
					<a href="{{route('reserve.acomodation')}}" class="btn btn-success" > Reservar</a>
		        </div>
			</div>
		</div>
	</div>
@endsection
