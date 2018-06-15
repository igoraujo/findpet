@extends('layouts.frontend')

{{-- Page Title --}}
@section('page-title', 'Welcome')

{{-- Page Subtitle --}}
@section('page-subtitle', '')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    
@endsection

@section('content')
	<section class="form-group section-detail">
		<div class="col-md-12">

			<div class="col-md-12 col-sm-12">
				<div>
					<img class="col-md-12 col-sm-12" src="{{$accommodation->foto}}">
				</div>
				<div class="col-md-12 col-sm-12">
					<div>
						<h3>Dados do Anfitrião</h3>
					</div>
					<div>
						<h4>Nome do Local:</h4>
						<p>{{$accommodation->nome}}</p>
					</div>
					<div>
						<h4>Nome do Anfitrião:</h4>
						<p>{{$accommodation->user->name}}</p>
					</div>
					<div>
						<h4>Descrição:</h4>
						<p>{{$accommodation->descricao}}!</p>
					</div>
					<div>
						<h4>Cidade:</h4>
						<p>
							@if($accommodation->cidade == 1)
								Belo Horizonte
							@elseif($accommodation->cidade == 2)
								Manaus
							@elseif($accommodation->cidade == 3)
								Rio de Janeiro
							@else
								São Paulo
							@endif
						</p>
					</div>
					<div>
						<!-- <input id="btn-reservar" type="submit" class="btn btn-danger" value="Cancelar"> -->
						<a href="{{route('reserve.acomodation', ['id' => $accommodation->id])}}" class="btn btn-success btn-reserva" > Reservar</a>
					</div>
				</div>
	    	<!-- /.form-group -->
    		</div>
    	</div>
    </section>
    <!-- /.col-md-12 -->
@endsection