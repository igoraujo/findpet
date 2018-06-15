{{-- Extends Layout --}}
@extends('layouts.backend_acomodation')

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

    <div class="row">
    	<div class="col-md-12 text-center">
			<h2>Cadastrar Novo Hotel</h2>
		</div>
    </div>
    <form action="{{route('register.acomodation')}}" method="post">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <div class="row">
	    	<div class="col-md-6">
	    		<label for="name_hotel">Nome</label>
	    		<input type="text" name="nome" id="name_hotel" placeholder="Nome estabelecimento" class="form-control">
	    	</div>
	    	<div class="col-md-6">
	    		<label for="cidade">Cidade</label>
	    		<select class="form-control" name="cidade" id="cidade">
	    			<option value="1">Belo Horizonte</option>
	    			<option value="2">Manaus</option>
	    			<option value="3">Rio de Janeiro</option>
	    			<option value="4">São Paulo</option>
	    		</select>
	    	</div>
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
				<label for="porte_pet">Porte</label>
	    		<select class="form-control" name="porte_pet" id="porte_pet">
	    			<option value="1">Pequeno</option>
	    			<option value="2">Médio</option>
	    			<option value="3">Grande</option>
	    		</select>
	    	</div>	
	    	<div class="col-md-6">
				<label for="foto">Foto</label>
	    		<input type="text" name="foto" id="foto" placeholder="Link foto" class="form-control">
	    	</div>	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-12">
				<label for="descricao">Descrição</label>
	    		<textarea class="form-control" name="descricao" id="descricao" rows="7"></textarea>
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
