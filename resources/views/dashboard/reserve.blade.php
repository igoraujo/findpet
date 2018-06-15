{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    {!! Breadcrumbs::render('dashboard') !!}
@endsection

{{-- Page Title --}}
@section('page-title', 'Dashboard')

{{-- Page Subtitle --}}
@section('page-subtitle', 'it all starts here')

{{-- Header Extras to be Included --}}
@section('head-extras')

@endsection

@section('content')
	<h2 class="text-center">Minhas reservas</h2>
	<br>
	@foreach($reservas as $reserva)
		<div class="row">
			<div class="col-md-4">
				<img src="{{$reserva->hotel->foto}}" class="img-responsive">
			</div>
			<div class="col-md-8">
				<h3>Acomodação</h3>
				<p>{{$reserva->hotel->nome}}</p>
				<br>
				<h3>Pet</h3>
				<p>{{$reserva->pet->name_pet}}</p>
			</div>
			<hr>
		</div>
		<br>
	@endforeach
@endsection
<!-- 
{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection -->
