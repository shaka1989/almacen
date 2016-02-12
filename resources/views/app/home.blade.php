@extends('master')

@section('content')
	<div class="container-fluid container-products">
		

	
		
	
	
	
			<div class="flash-message animated fadeInLeft">
				@if( Session::get('message'))
				<div class="alert alert-dismissible alert-success">
				  <button type="button" class="close" data-dismiss="alert">x</button>
				  {{ Session::get('message') }}
				</div>	
				@endif				
			</div>
	

		<div class="row">
			<div class="col-xs-12"><h4 class="page-header">Productos disponibles</h4></div>
		</div>


		<div class="row">
			
			<div class="col-xs-12 col-sm-3">
				<ul class="list-group">

					@foreach($categories as $category)
						<li class="list-group-item" id="filter-category-{{ $category->id }}">
						    <span class="badge">{{ $category->products->count() }}</span>
						    <a href="" class="btn-category-filter" data-category="{{ $category->id }}">{{ $category->name }}</a>
						</li>
					@endforeach
				
				</ul>

			</div>

			<div class="col-xs-12 col-sm-9 ">
				
				<div class="loader">Loading...</div>
				
				<div class="row container-cards-products" id="container-cards-products">
					
				</div>

			</div>

		</div>




		

	</div>


	
@endsection




@section('scripts')
	<script src="{{ asset('js/home.js') }}"></script>
@endsection


