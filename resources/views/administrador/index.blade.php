@extends('layouts.app')
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    @section('content')
    <div class="row">
        <div class="col-md-10 offset-1 datatable">
            <br>
            </br>
            <button class="btn btn-success aimar_btn" type="">
                Bebidas
            </button>
            <button class="btn aimar_btn">
                ir a
            </button>
            <a class="btn btn-danger aimar_btn" href="{{ url('platos') }}">
                Platos
            </a>
            <br>
                <br>
                    <table id="productos">
                        <thead>
                            <tr class="bg-info">
                                <th>
                                    Bebida
                                </th>
                                <th>
                                    estado
                                </th>
                                <th>
                                    Precio
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bebidas as $bebida)
                            <tr>
                                <td>
                                    {{ $bebida->nombre }}
                                </td>
                                <td>
                                    {{ $bebida->estado }}
                                </td>
                                <td>
                                    {{ $bebida->precio }}
                                </td>
                                <td>
                                    <a class="btn btn-info text-white" onclick="cambiar({{ $bebida->id }})" type="button">
                                        <i class="fas fa-toggle-off fa-1x">
                                        </i>
                                        {{-- {{ $producto->estado?'inactiva':'activar' }} --}}
                                    </a>
                                    <a class="btn btn-success" data-toggle="modal" href="#editar{{ $bebida->id }}" type="button">
                                        <i class="fas fa-edit">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger" data-toggle="modal" href="#eliminar{{$bebida->id}}" type="button">
                                        <i class="fas fa-trash-alt text-white">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </br>
            </br>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <script>
        function cambiar($id){
            var url='bebidas/cambiar/'+$id;
            $.ajax({
                url: url,
                type: 'get',
                success: function(response){
                    console.log(response);
                }
            });
        }
        $('#productos').dataTable({
        "processing":true,
        "lengthMenu": [[10,25,50,-1],[10,25,50,"ALL"]],
        "language":{
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    },
    });
    </script>
    @include('modals.modal_eliminar1')
    @include('modals.modal_editar1')
    <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
    <script type="text/javascript">
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
    </script>
    @endsection
</link>