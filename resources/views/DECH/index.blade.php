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

                            <a href="{{ route('insdech') }}" class="btn btn-primary border border-dark rounded">
                                <i class="fas fa-plus"></i>&nbsp;Insérer Nouveau DECH
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="card my-3">

                <div class="card-header">
                    <h3 class="text-center text-uppercase">
                        Liste Des DECH
                    </h3>
                </div>



                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Maree</th>
                                <th class="text-center">Bateau</th>
                                <th class="text-center">Qte DECH Total</th>
                                <th class="text-center">Poids DECH Total</th>
                                <th class="text-center">Date De Sortie</th>
                                <th class="text-center">Date De Entrer</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($shortdata)
                                @foreach ($shortdata as $item)
                                    <tr>
                                        <td class="text-center">{{ $item->maree }}</td>
                                        <td class="text-center">{{ $item->bateau }}</td>
                                        <td class="text-center">{{ $item->totalquantitygen }}</td>
                                        <td class="text-center">{{ $item->totalpoidsgen }}</td>
                                        <td class="text-center">{{ $item->dateS }}</td>
                                        <td class="text-center">{{ $item->dateE }}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <a href="{{ route('viewdecharge', ['maree' => $item->maree]) }}" class="btn btn-sm btn-primary mx-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-edit"></i>
                                            </button>


                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h1>no data found</h1>

                            @endif


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
    $(document).ready( function () {
       $('#myTable').DataTable({
           
       });
   });
</script>

@stop
