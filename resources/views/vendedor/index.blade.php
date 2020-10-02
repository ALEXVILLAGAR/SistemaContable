@extends('layouts.app')
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css"></link>
    @section('content')
    <div class="row">
        <div class="col-md-10 offset-1 text-center">
            <h2>Nuevas ventas</h3>
                <hr>
        </div>
 </div>
        <div class="row">
            
        
            <div class="col-md-10 offset-1 mt-1 text-center shadow">
                <h3>Agregar producto a la factura</h3>
                <hr class="text-info">
                    
                <div class="row">
        <div class="col">
          <input type="text" name="" class="form-control col-md-12  mt-3 shadow" placeholder="Codigo Producto">
        </div>
        <div class="col">
           <input type="text" name="" class="form-control col-md-12  mt-3 shadow" placeholder="Valor">
        </div>
        <div class="col">
           <input type="text" name="" class="form-control col-md-12  mt-3 shadow" placeholder="Iva">
        </div>
        <div class="col">
           <input type="text" name="" class="form-control col-md-12  mt-3 shadow" placeholder="Descripcion">
        </div>
      </div>

                <br>

                <div>
                    <button class="btn btn-success shadow">Buscar</button>
                    <button class="btn btn-info shadow">Agregar</button>                    
                </div>
                <br>
            </div>
              </div>   
              <br>
              <div class="row">
                <div class="col-md-10 offset-1 text-center">
                <h2>Productos cargados en la factura</h3>
                <hr>
        </div>
                  
              </div>  
              <div class="row">
        <div class="col-md-10 offset-1 datatable shadow">
            <br>
            </br>                    
                    
            <br>
                <br>
                    <table id="productos" class="shadow">
                        <thead>
                            <tr class="bg-info">
                                <th>
                                    codigo
                                </th>
                                <th>
                                    descripcion
                                </th>
                                <th>
                                    valor Unitario
                                </th>
                                <th>
                                    IVA
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                                <td>
                                    {{ $producto->codigo }} 
                                </td>
                                <td>
                                    {{ $producto->descripcion }}
                                </td>
                                <td>
                                    {{ $producto->valor_unitario }}
                                </td>
                                <td>
                                    {{ $producto->IVA }}
                                </td>
                                <td>
                                    <a type="submit" class="btn btn-info shadow" data-toggle="modal" href="#EditarProductos-modal-lg{{$producto->id}}" title="Editar Producto"><i class="fas fa-edit"></i></a>

                                     <button type="submit" class="btn btn-danger shadow" data-toggle="modal" data-target=".EliminarProducto-modal-lg" title="Eliminar Producto"><i class="fas fa-trash-alt" class="text-danger"></i></button>
                                </td> 
                               {{--  <td>
                                    <a class="btn btn-info text-white" onclick="cambiar({{ $producto->id })" type="button">
                                        <i class="fas fa-toggle-off fa-1x">
                                        </i>
                                        {{-- {{ $producto->estado?'inactiva':'activar' }} 
                                    </a>
                                    <a class="btn btn-success" data-toggle="modal" href="#editar{{ $producto->id }}" type="button">
                                        <i class="fas fa-edit">
                                        </i>
                                    </a><!-- 
                                    <a class="btn btn-danger" data-toggle="modal" href="#eliminar{{$producto->id}}" type="button">
                                        <i class="fas fa-trash-alt text-white">
                                        </i>
                                    </a> -->
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </br>
            </br>
        </div> 
        </div>
      
   
<!-- @include('modal.ModalCrearProducto')
@include('modal.ModalEditarProducto')
@include('modal.ModalEliminarProducto') -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <script>
        // function cambiar($id){
        //     var url='bebidas/cambiar/'+$id;
        //     $.ajax({
        //         url: url,
        //         type: 'get',
        //         success: function(response){
        //             console.log(response);
        //         }
        //     });
        // }
        $('#productos').dataTable({
        "processing":true,
        "lengthMenu": [[10,25,50,-1],[10,25,50,"ALL"]],
        "language":{
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    },
    });
    </script>
    @include('modal.ModalCrearProducto')
    @include('modal.ModalEditarProducto')
    {{-- @include('modals.modal_eliminar1')
    @include('modals.modal_editar1') --}}
    <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
  
    @endsection
