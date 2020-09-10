      <div class="modal fade EditarProductos-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ route('productos.store') }}" method="post" accept-charset="utf-8" class="col-md-12">
         @csrf
          <div class="card-header text-center">
            <h4>Editar Producto</h4>
          </div>
          <br>
        <div class="row">
          <div class="col-md-12">
             <label for="codigo" class="col-md-4"> <strong>Código</strong></label>             
             <input type="text" class="form-control shadow" placeholder="Codigo" name="codigo" required="" class="form-control col-md-8">
             </div>
             <div class="col-md-12 mt-2">
             <label for="" class="col-md-4"><strong>Descripción</strong></label>
             <input type="text" class="form-control shadow" placeholder="Descripcion" name="descripcion" required="" class="form-control col-md-8">
          </div>
          
          	<div class="col-md-6 mt-2">
          		<label for="" class="col-md-4" ><strong>Valor</strong></label>
             <input type="number" class="form-control shadow" placeholder="Valor" name="valor_unitario" required="" class="col-md-11 mr-4">
          	</div>
          	<div class="col-md-6 mt-2" required>
             <label for="" class="col-md-4"><strong>IVA</strong></label>             
             <input type="number" class="form-control shadow" placeholder="IVA" name="IVA" class="col-md-11 ml-4">
          </div> 
          
        </div>
        <div class="text-center mt-4">
        <button type="submit" class="btn btn-info">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
      </form>

    </div>
  </div>
</div>