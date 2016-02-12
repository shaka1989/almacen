@extends('master')

@section('content')
	<div class="container-fluid container-form">
	
	
	<div class="row">
			<div class="col-xs-12"><h4 class="page-header">Crear producto</h4></div>
		</div>


		<div class="row">
			
			<div class="col-xs-12">
				
				


				{!! Form::model($product, array('route' => 'products.store', 'class' => 'form-horizontal animated bounceIn' )) !!}
				  <fieldset>
				   
				   
					@include('app.product._form')

				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <button type="submit" id="save-product" class="btn btn-primary">Crear</button>
				      </div>
				    </div>
				  </fieldset>
				{!! Form::close() !!}

			</div>
			

		</div>

	</div>
	
@endsection