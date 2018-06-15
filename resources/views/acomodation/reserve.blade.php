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
	<h2 class="text-center">Confirme sua reserva para {{$accommodation->nome}}</h1>
	<div class="row">
		<div class="col-md-6">
			<img src="{{$accommodation->foto}}" class="img-responsive">
		</div>
		<div class="col-md-6">
			@if(empty($pets))
				<h4>Você não possui Pets dentro das especificações do hotel</h4>
			@else
				<h4>Selecione o seu Pet</h4>
				@foreach($pets as $pet)
					<a class="btn btn-success" href="{{route('reserve.confirmation', ['hotel_id' => $accommodation->id, 'pet_id' => $pet->id])}}">{{$pet->name_pet}}</a>
				@endforeach
			@endif
		</div>	
	</div>
</div>
@endsection