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
    	@foreach($accommodations as $a)
	    	<div class="row">
	    		<div class="col-md-6">
	    			<img class="img-responsive" src="{{$a->foto}}">
	    		</div>
	    		<div class="col-md-6">
					<div class="row">
						<h2>Nome acomodação</h2>
						<p>{{$a->nome}}</p>
					</div>
					<div class="row">
						<h2>Descrição:</h2>
						<p>{{$a->descricao}}</p>
					</div>
					<div class="row">
						<h2>Localização</h2>
						<p>
							@if($a->cidade == 1)
								Belo Horizonte
							@elseif($a->cidade == 2)
								Manaus
							@elseif($a->cidade == 3)
								Rio de Janeiro
							@else
								São Paulo
							@endif

						</p>
					</div>
					<div class="row">
						<a href="{{route('detail.acomodation', ['id' => $a->id])}}" class="btn btn-warning" > Visualizar</a>
						<a href="{{route('reserve.acomodation', ['id' => $a->id])}}" class="btn btn-success" > Reservar</a>
			        </div>
				</div>
			</div>
			<br>
		@endforeach
	</div>
@endsection
