@extends('layouts.app')
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css"></link>
    @section('content')
    <div class="row">
        <div class="col-md-10 offset-1 datatable shadow">
            <br>
            </br>

                    <button type="button" class="btn btn-primary shadow" data-toggle="modal" data-target=".bd-example-modal-lg">Nuevo Producto</button>
      
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
                                    <button type="submit" class="btn btn-info shadow" data-toggle="modal" data-target=".EditarProductos-modal-lg" title="Editar Producto"><i class="fas fa-edit"></i></button>

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
                                    </a>
                                    <a class="btn btn-danger" data-toggle="modal" href="#eliminar{{$producto->id}}" type="button">
                                        <i class="fas fa-trash-alt text-white">
                                        </i>
                                    </a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </br>
            </br>
        </div>
    </div>
@include('modal.ModalCrearProducto')
@include('modal.ModalEditarProducto')
@include('modal.ModalEliminarProducto')

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
    {{-- @include('modals.modal_eliminar1')
    @include('modals.modal_editar1') --}}
    <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
   {{--  <script type="text/javascript">
        @if ($creado=='1')
                // Display an info toast with no title
                 toastr.success('la bebida se agrego correctamente','Creada',{
                    "progressBar": 'true',
                    "positionClass": "toast-bottom-right",
                 });
                  
            @endif
            @if ($creado=='2')
                // Display an info toast with no title
                 toastr.success('la bebida se edito correctamente','Actualizada',{
                     "progressBar": 'true',
                     "positionClass": "toast-bottom-right",
                 });
                
            @endif
    </script> --}}
    @endsection
