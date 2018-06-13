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
	<h2 class="text-center">Confirme sua reserva para Hotelaria HotDog</h1>
	<div class="col-md-6">
	  <div class="form-group">
	    <label for="name">Nome *</label>
	    <input type="text" class="form-control" name="name" placeholder="Nome">
	  </div>
	  <!-- /.form-group -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-6">
	  <div class="form-group ">
	    <label for="cpf">CPF/CNPJ *</label>
	    <input type="number" class="form-control" name="cpf" placeholder="000.000.000-00">
	  </div>
	  <!-- /.form-group -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-12">
	<div class="form-group">
	<label for="address">Endereço *</label>
	<input type="text" class="form-control" name="address" placeholder="Endereço">
	</div>
	<!-- /.form-group -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-6">
	<div class="form-group">
	<label for="breed">Raça do pet *</label>
	<input type="text" class="form-control" name="breed" placeholder="Dalmata">
	</div>
	<!-- /.form-group -->
	</div>
	<!-- /.col-md-12 -->

	<div class="col-md-6">
	<div class="form-group">
	<label for="raca">Vacinado *</label>
	<div class="radio">
	  <label><input type="radio" name="radio-yes" value="y">Sim</label>
	  <label><input type="radio" name="radio-no" value="n">Não</label>
	</div>

	</div>
	<!-- /.form-group -->
	</div>
	<!-- /.col-md-12 -->
</div>
@endsection