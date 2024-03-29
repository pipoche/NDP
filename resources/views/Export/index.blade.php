@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">

            <div class="row my-5">
                <div class="container">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <a href="/Export/newexport" class="btn btn-primary border border-dark rounded">
                                <i class="fas fa-plus"></i>&nbsp; Créer une nouvelle exportation
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="card my-3">

                <div class="card-header">
                    <h3 class="text-center text-uppercase">
                        Liste Des exportations
                    </h3>
                </div>



                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No EXP</th>
                                <th class="text-center">No DUM</th>
                                <th class="text-center">DESTINATION</th>
                                <th class="text-center">TRANSPORT</th>
                                <th class="text-center">DEVIS</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shortdata as $item)
                                <tr>
                                    <td class="text-center">{{ $item->numexport }}</td>
                                    <td class="text-center">{{ $item->numdum }}</td>
                                    <td class="text-center">{{ $item->destination }}</td>
                                    <td class="text-center">{{ $item->transport }}</td>
                                    <td class="text-center">{{ $item->devise }}</td>
                                    <td class="text-center">{{ $item->created_at->format('d M Y') }}</td>

                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="{{ route('viewexport', ['numexport' => $item->numexport]) }}"
                                            class="btn btn-sm btn-primary mx-2">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({

            });
        });
    </script>

@stop
