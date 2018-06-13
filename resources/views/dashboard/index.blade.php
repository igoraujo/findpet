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

    <!-- Small boxes (Stat box) -->

    @if(!empty($pets))
	    <div class="row">
	    	<div class="col-md-12 text-center">
	    		<h2>Meus Pets Cadastrados</h2>
	    	</div>
	    </div>
	    <br>
	    	@foreach($pets as $pet)
	    		<br>
			    <div class="row">
			    	<div class="col-md-12">
			    		<p>Nome: {{$pet->name_pet}}</p>
			    		<p>Raça: {{$pet->breed_pet}}</p>
			    	</div>
			    </div>
			    <hr>
	    	@endforeach
    @endif
    <!-- /.row -->
    <div class="row">
    	<div class="col-md-12 text-center">
			<h2>Cadastrar Novo Pet</h2>
		</div>
    </div>
    <form action="{{route('register.pet')}}" method="post">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="row">
	    	<div class="col-md-6">
	    		<label for="name_pet">Nome</label>
	    		<input type="text" name="name_pet" id="name_pet" placeholder="Nome do meu Pet" class="form-control">
	    	</div>
	    	<div class="col-md-6">
	    		<label for="breed_pet">Raça</label>
	    		<select class="form-control" name="breed_pet" id="breed_pet">
	    			<option>Bulldog</option>
	    			<option>Golden Retriever</option>
	    			<option>Pastor Alemão</option>
	    			<option>Poodle</option>
	    			<option>Vira-lata</option>
	    		</select>
	    	</div>
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-4">
				<label for="porte_pet">Porte</label>
	    		<select class="form-control" name="porte_pet" id="porte_pet">
	    			<option value="1">Pequeno</option>
	    			<option value="2">Médio</option>
	    			<option value="3">Grande</option>
	    		</select>
	    	</div>	
	    	<div class="col-md-4">
				<label for="idade_pet">Idade</label>
	    		<select class="form-control" name="idade_pet" id="idade_pet">
	    			<option value="1">1 a 3</option>
	    			<option value="2">4 a 6</option>
	    			<option value="3">7 a 10</option>
	    			<option value="4">Maior de 10</option>
	    		</select>
	    	</div>	
	    	<div class="col-md-4">
				<label for="vacina_pet">Vacina em dia?</label>
	    		<select class="form-control" name="vacina_pet" id="vacina_pet">
	    			<option value="1">Sim</option>
	    			<option value="2">Não</option>
	    		</select>
	    	</div>	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-12">
	    		<input type="submit" value="Cadastrar" class="btn btn-success btn-block">
	    	</div>
	    </div>
	</form>

@endsection
<!-- 
{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection -->
