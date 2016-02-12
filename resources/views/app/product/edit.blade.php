@extends('master')

@section('content')
	<div class="container-fluid container-form">
	
	
	<div class="row">
			<div class="col-xs-12"><h4 class="page-header">Editar producto</h4></div>
		</div>


		<div class="row">
			
			<div class="col-xs-12">
				
				


				{!! Form::model($product, array('route' => ['products.update',$product], 'class' => 'form-horizontal animated bounceIn' )) !!}
				  <fieldset>
				   
				    <input type="hidden" name="_method" value="PUT">
					@include('app.product._form')

				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <button type="submit" id="save-product" class="btn btn-primary">Actualizar</button>
				      </div>
				    </div>
				  </fieldset>
				{!! Form::close() !!}

			</div>
			

		</div>

	</div>
	
@endsection