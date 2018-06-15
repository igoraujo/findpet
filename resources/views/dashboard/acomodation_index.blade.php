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

    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <div class="row">
    	<div class="col-md-12 text-center">
			<h2>Minhas Acomodações</h2>
		</div>
    </div>
    	<div class="row">
    @foreach($accommodations as $a)
		<div class="col-md-6">
			<h2 class="text-center">{{$a->nome}}</h2>
			<img src="{{$a->foto}}" class="img-responsive">
		</div>
    @endforeach
    	</div>
    

@endsection
<!-- 
{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection -->
