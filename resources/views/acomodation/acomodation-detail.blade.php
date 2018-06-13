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

    <section class="form-group">
		<div class="col-md-12 col-sm-12">
			<div>
				<img class="col-md-6 col-sm-6" src="https://images.pexels.com/photos/316776/pexels-photo-316776.jpeg?auto=compress&cs=tinysrgb&h=650&w=940">
			</div>
			<div class="col-md-6 col-sm-6">
				<div>
					<h3>Dados do Anfitrião</h3>
				</div>
				<div>
					<h4>Nome do Local:</h4>
					<p>Hotelaria HotDog</p>
				</div>
				<div>
					<h4>Nome do Anfitrião:</h4>
					<p>Walber Ferreira</p>
				</div>
				<div>
					<h4>Descrição:</h4>
					<p>Hotel perfeito para animais de pequeno porte!</p>
				</div>
				<div>
					<h4>Endereço:</h4>
					<p>Rua Centralina, 710 - Novo Hamburgo / RS</p>
				</div>
				<div>
					<!-- <input id="btn-reservar" type="submit" class="btn btn-danger" value="Cancelar"> -->
					<a href="{{route('reserve.acomodation')}}" class="btn btn-success" > Reservar</a>
				</div>
			</div>

    	<!-- /.form-group -->

    	</div>
    </section>
    <!-- /.col-md-12 -->
@endsection