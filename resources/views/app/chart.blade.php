@extends('master')

@section('content')
	<div class="container-fluid ">
		
		<div class="row">
			<div class="col-xs-12"><h4 class="page-header">Estadística: 10 productos más vendidos</h4></div>
		</div>
	
		<div class="row">
			<div class="col-xs-12">
				<canvas id="myChart" style="width:100%; height: 400px;"></canvas>
			</div>
		</div>
	
	

	</div>
	
@endsection




@section('scripts')

	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js') }}"></script>
	<script src="{{ asset('js/chart.js') }}"></script>
@endsection




