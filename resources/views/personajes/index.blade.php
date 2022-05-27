@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" />
@endsection

@section('content')
    <div class="col-md-12">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Listado:</h5>
            Usted se ha conectado al sitio web de consulta de Personajes de Breaking Bad
        </div>
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Detalle de Personajes</h3>
            </div>
            <table id="personajes-table" class="table table-striped" style="width: 99%;">
                <thead>
                    <tr class="text-center">
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th>Nickname</th>
                        <th>Accion</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('complementos/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('complementos/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('complementos/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('complementos/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('complementos/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('complementos/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            var table = $('#personajes-table').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5'
                ],
                processing: true,
                ordering: true,
                pageLength: 20,
                "ajax": {
                    "url": "{{ route('personajesDT') }}",
                    "type": "POST"
                },
                columnDefs: [{
                    targets: "_all",
                    className: 'dt-body-center'
                }],
                columns: [{
                        data: 'char_id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'nickname'
                    },
                    {
                        data: 'btn'
                    }
                ],
                "language": {
                    "emptyTable": "No hay datos disponibles en la tabla.",
                    "info": "Del _START_ al _END_ de _TOTAL_ ",
                    "infoEmpty": "Mostrando 0 registros de un total de 0.",
                    "infoFiltered": "(filtrados de un total de _MAX_ registros)",
                    "infoPostFix": "(actualizados)",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "searchPlaceholder": "Dato para buscar",
                    "zeroRecords": "No se han encontrado coincidencias.",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": "Ordenación ascendente",
                        "sortDescending": "Ordenación descendente"
                    }
                }
            });
        });
    </script>
@endsection
