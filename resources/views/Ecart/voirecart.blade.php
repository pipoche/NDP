@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Ecart du Maree : {{$maree}}</h1>

    </div>

    <div class="container">


        <div class="card card p-5" style="width: 100%">

            <div class="container">
                <ul class="list-unstyled d-flex justify-content-between">
                    <li>

                        <select name="FilterByCategory" id="FilterByCategory" class="border border-dark rounded"
                            onchange="filterTable()">
                            <option value="" disabled selected>Select a category</option>
                            <option value="Tako">Tako</option>
                            <option value="Mongo">Mongo</option>
                            <option value="CHOCO">CHOCO</option>
                            <option value="Sepiola">Sepiola</option>
                            <option value="Calamar">Calamar</option>
                            <option value="Lenguado">Lenguado</option>
                            <option value="DENTO">DENTO</option>
                            <option value="Calamar">Calamar</option>
                            <option value="Europe">Europe</option>
                            <option value="Afrique">Afrique</option>

                        </select>
                        <button class="btn btn-primary border border-dark rounded" onclick="resetFilter()">
                            <i class="fas fa-sync"></i>
                        </button>
                    </li>
                    <li> <button class="btn btn-warning border border-dark rounded" onclick="printTable()"> <i
                                class="fas fa-download"></i>
                            Telecharge</button>

                    </li>
                </ul>

            </div>


            <table class="table   data-table" style="min-width: 100%" id="myTable">
                <thead>
                    <tr>
                        <th class="text-center costum-color">ESPECE</th>
                        <th class="text-center costum-color">Qte DEF</th>
                        <th class="text-center costum-color">Qte DECH</th>
                        <th class="text-center costum-color">Poids</th>
                        <th class="text-center costum-color">Ecart</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($groupeddata as $category => $groupeddata)
                        <!-- Output category header -->
                        <tr id="{{ $category }}">
                            <th class="text-center costum-color" >{{ $category }}</th>
                        </tr>

                        <!-- Output individual fish rows for the current category -->
                        @foreach ($groupeddata as $item)
                            <tr id="{{ $category }}">
                                <td class="text-center" >{{ $item->fishname }}</td>
                                <td class="text-center">
                                    <p id="canchange" class="mb-0">{{ $item->ndpfishquantity }}</p>
                                </td>
                                <td class="text-center">
                                    <p id="canchange" class="mb-0">{{ $item->dechQte }}</p>
                                </td>
                                <td class="text-center">
                                    <p id="canchange" class="mb-0">{{ $item->dechpoids }}</p>
                                </td>
                                <td class="text-center">
                                    <p id="canchange" class="mb-0">{{ $item->ecartvalue }}</p>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Output total quantity for the current category -->
                        <tr class="total" id="{{ $category }}">
                            <th class="text-danger text-center"><strong>Total {{ $category }} :</strong></th>
                            <td class="text-center" colspan="">
                                <strong>{{ $groupeddata->first()->ndpcatquantitytotal }}</strong>
                            </td>
                            <td class="text-center" colspan="">
                                <strong>{{ $groupeddata->first()->dechcatQtetotal }}</strong>
                            </td>
                            <td class="text-center" colspan="">
                                <strong>{{ $groupeddata->first()->dechcatpoidstotal }}</strong>
                            </td>
                            <td class="text-center" colspan="">
                                <strong>{{ $groupeddata->first()->ecartcattotal }}</strong>
                            </td>
                        </tr>


                        
                    @endforeach

                    
                    <tr>
                        <th class="text-success text-center"><strong>Total General:</strong></th>
                        <td class="text-center"><strong>{{ $ndptotalgen }}</strong></td>
                        <td class="text-center"><strong>{{ $dechqtetotalgen }}</strong></td>
                        <td class="text-center"><strong>{{ $dechpoidstotalgen }}</strong></td>
                        <td class="text-center"><strong>{{ $ecarttotalgen }}</strong></td>

                    </tr>

                </tbody>
            </table>

        </div>

    </div>

@stop

@section('css')
    <style>
        .costum-color {
            color: #484964;
        }

        .lightcolor {
            color: #ABACBE;
        }
    </style>
@stop

@section('js')

    <script>
        function filterTable() {
            var selectedCategory = document.getElementById("FilterByCategory").value;
            var tableRows = document.querySelectorAll(".data-table1 tbody tr");

            tableRows.forEach(function(row) {
                if (selectedCategory === "" || row.id.toLowerCase() === selectedCategory.toLowerCase()) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });


        }

        function resetFilter() {
            document.getElementById("FilterByCategory").selectedIndex = 0;
            filterTable();

        }

        function printTable() {
            // Focus on the table element
            var table = document.getElementById('printTable');
            table.window.print();


            // Call window.print() to print the focused table
        }

        
    </script>
@stop
