@foreach ($productos as $producto)
<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id ="EliminarProducto-modal-lg{{$producto->id}}">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <form action="{{ route('Eliminar',$producto->id) }}" method="post" accept-charset="utf-8" class="col-md-12">
	         @csrf
	          <div class="card-header text-center">
	            <h4>Elminar Producto</h4>
	          </div>
	          <div class="alert alert-warning text-center">
	          <strong>! Por favor ingrese el codigo del producto que desea eliminar !</strong>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	             <label for="codigo" class="col-md-4"> <strong>Código</strong></label>             
	             <input type="text" class="form-control shadow" placeholder="Codigo" name="codigo" required="" class="form-control col-md-8">
	             </div>
	          </div>
	        <div class="text-center mt-4">
	        <button type="submit" class="btn btn-info">Continuar</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>
@endforeach