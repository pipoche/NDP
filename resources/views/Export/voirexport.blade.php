@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3 d-flex justify-content-center">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-2">
                                
                                <a href="{{Route('exportpage')}}">
                                    <button class="btn costum-style" style="color: white;"> <i class="fas fa-arrow-left"></i>
                                        back</button>
                                </a>
                                
                            </div>
                            <div class="col-sm-8" >
                                <h1 class="text-center">Export Nº {{ $numexport }}</h1>
                            </div>
                            <div class="col-sm-2 text-right">
                                <button class="btn btn-warning border border-dark rounded"> <i class="fas fa-download"></i>
                                    Telecharge</button></a>
                            </div>
                        </div>


                    </div>

                    <div class="card-body d-block" id="form1">
                        <div class="card">

                            <div class="card-body">

                                <table class="col-sm-8 ml-5">
                                    @foreach ($exportdata as $expdata)
                                        <tr>
                                            <td class="col-sm-4">DATE</td>
                                            <td class="col-sm-4">{{ $expdata->created_at->format('d M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">No Dum</td>
                                            <td class="col-sm-4">{{ $expdata->numdum }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">DESTINATION</td>
                                            <td class="col-sm-4">{{ $expdata->destination }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">VILLE</td>
                                            <td class="col-sm-4">{{ $expdata->ville }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">PAYS</td>
                                            <td class="col-sm-4">{{ $expdata->pays }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">TRANSPORT</td>
                                            <td class="col-sm-4">{{ $expdata->transport }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-4">DEVISE</td>
                                            <td class="col-sm-4">{{ $expdata->devise }}</td>
                                        </tr>
                                    @endforeach

                                </table>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table" style="border:1px solid #9CA7BE;">
                                        <thead>
                                            <tr style="background-color: #EEF1F8;">
                                                <th class="text-center" style="color:#484964;">Facture</th>
                                                <th class="text-center" style="color:#484964;">Maree</th>
                                                <th class="text-center" style="color:#484964;">DECHARGE</th>
                                                <th class="text-center poids" style="color:#484964;">Poids</th>
                                                <th class="text-center" style="color:#484964;">Montant</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            @foreach ($facturedata as $facdata)
                                                <tr>
                                                    <td class="text-center"> {{ $facdata->facturecode }}</td>
                                                    <td class="text-center">{{ $facdata->maree }}</td>
                                                    <td class="text-center">{{ $facdata->decharge }}</td>
                                                    <td class="text-center">{{ $facdata->poids }}</td>
                                                    <td class="text-center">{{ $facdata->montant }}</td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-center" style="color:#484964;">
                                                    <strong>Total
                                                        :</strong>
                                                </td>
                                                <td class="text-center bold-text" style="color: #484964;" id="totalpoids">
                                                    {{ $totalpoids }}
                                                </td>
                                                <td class="text-center bold-text" style="color: #484964;"id="totalmontant">
                                                    {{ $totalmontant }}

                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@section('css')
    <style>
        .costum-style {
            background-color: #484964;
            border-color: #484964;
            border-radius: 10px;
        }

        .costum-style:hover {
            background-color: #9CA7BE;

        }

        .margincustom {
            margin-left: 10rem;
            margin-right: 10rem;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;

        }

        .customradius {
            border-color: #484964;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
@stop

@section('js')
    <script></script>

@stop
