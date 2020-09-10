      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark text-white tit">
      <form action="{{ route('productos.store') }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1">
         @csrf
          <div class="card-header text-center">
            BIENVENIDO AL EDITOR DE TEXTO 
          </div>
          <br>
        <div class="row col">
          <div class="col-md-3">
             <div> Codigo </div>
             <input type="text" class="form-control" placeholder="Codigo" name="codigo" required="">
             </div>
             <div class="col-md-3">
             <div> Descripcion </div>
             <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required="">
          </div>
          <div class="col-md-3">
             <div> Valor </div>
             <input type="number" class="form-control" placeholder="Valor" name="valor_unitario" required="">
          </div>
          <div class="col-md-3" required>
             <div> Iva </div>
             <input type="number" class="form-control" placeholder="IVA" name="IVA">
          </div>
        </div>
        <div class="card-header text-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
      </form>

    </div>
  </div>
</div>