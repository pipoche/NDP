@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    <div class="row my-5">
                        <div class="container">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>

                                    <a href="{{ Route('ecartcalcule') }}" class="btn btn-primary" id="ecartlink">
                                        <i class="fas fa-sync"></i>&nbsp; Refrech Page
                                    </a>



                                </li>
                            </ul>
                            <h3 class="text-center text-uppercase">
                                Liste Des Ecarts
                            </h3>

                        </div>
                    </div>

                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Maree</th>
                                <th class="text-center">Total Qte DEF</th>
                                <th class="text-center">Total Qte DECH</th>
                                <th class="text-center">Poids</th>
                                <th class="text-center">ECART</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item)
                                <tr>
                                    <td class="text-center">{{ $item->maree }}</td>
                                    <td class="text-center">{{ $item->ndptotalgen }}</td>
                                    <td class="text-center">{{ $item->dechqtetotalgen }}</td>
                                    <td class="text-center">{{ $item->dechpoidstotalgen }}</td>
                                    <td class="text-center">{{ $item->ecarttotalgen }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="#" class="btn btn-sm btn-warning">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="{{ Route('viewecart', ['maree' => $item->maree]) }}"
                                            class="btn btn-sm btn-primary mx-2">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-edit"></i>
                                        </button>


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
     
    </script>


@stop
