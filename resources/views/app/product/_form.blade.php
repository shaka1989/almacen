 <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
  <label class="col-lg-2 control-label">Nombre</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="{{ $product->name}}">
  </div>
</div>




 <div class="form-group {{ $errors->has('quanty')?'has-error':'' }}">
	<label class="col-lg-2 control-label">Cantidad</label>
  
  <div class="col-lg-10">
    <input type="text" class="form-control" name="quanty" id="quanty" placeholder="Cantidad" value="{{ $product->quanty}}">
  </div>
</div>

 <div class="form-group {{ $errors->has('value')?'has-error':'' }}">
  <label class="col-lg-2 control-label">Valor</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="value" id="value" placeholder="Valor" value="{{ $product->value}}">
  </div>
</div>


<div class="form-group">
  <label for="select" class="col-lg-2 control-label">Categoría</label>
  <div class="col-lg-10">
    {!! Form::select('category_id',$categories ,$product->category_id,['class' => 'form-control']) !!}
    
    
  </div>
</div>


<input type="hidden" name="image" value ="http://lorempixel.com/227/227">

@section('scripts')
	<script src="{{ asset('js/product.js') }}"></script>
@endsection