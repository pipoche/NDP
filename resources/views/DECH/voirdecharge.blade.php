@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Decharge du Maree : {{ $maree }}</h1>

    </div>

    <div class="container">


        <div class="card card p-5" style="width: 100%">

            <div class="row my-5">
                <div class="container">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <a href="#" class="btn btn-primary border border-dark rounded" >
                                <i class="fas fa-plus"></i>&nbsp; Start test
                            </a>
                        </li>
                       
                    </ul>
        
                </div>
            </div>

            <div class="container">
                <ul class="list-unstyled d-flex justify-content-between">
                    <li>

                        <select name="FilterByCategory" id="FilterByCategory" class="border border-dark rounded"
                            onchange="filterTable()">
                            <option value="" disabled selected>Select a category</option>
                            <option value="Tako">Tako</option>
                            <option value="Mongo">Mongo</option>
                            <option value="CHOCO">CHOCO</option>
                            <option value="Calamar">Calamar</option>
                            <option value="Lenguado">Lenguado</option>
                            <option value="DENTON">DENTON</option>
                            <option value="Europe">Europe</option>
                            <option value="Afrique">Afrique</option>

                        </select>

                        <button class="btn btn-primary border border-dark rounded" onclick="resetFilter()">
                            <i class="fas fa-sync"></i>
                        </button>
                    </li>
                    <li>
                        <a href="#">
                            <button class="btn btn-warning border border-dark rounded"> <i class="fas fa-download"></i>
                                Telecharge</button></a>
                    </li>
                </ul>
            </div>
            <table class="table   data-table1" style="min-width: 100%" id="myTable">
                <thead>
                    <tr>
                        <th class="text-center costum-color" colspan="2">ESPECE</th>
                        <th class="text-center costum-color">Fish Qte</th>
                        <th class="text-center costum-color">Fish poids</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($groupedData as $category => $categoryData)
                        <!-- Output category header -->
                        <tr id="{{ $category }}">
                            <th class="text-center costum-color" colspan="3">{{ $category }}</th>
                        </tr>

                        <!-- Output individual fish rows for the current category -->
                        @foreach ($categoryData as $item)
                            <tr id="{{ $category }}">
                                <td class="text-center" colspan="2">{{ $item->fishname }}</td>
                                <td class="text-center">
                                    <p id="canchange">{{ $item->fishquantity }}</p>
                                </td>
                                <td class="text-center">
                                    <p id="canchange">{{ $item->fishpoids }}</p>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Output total quantity for the current category -->
                        <tr class="total" id="{{ $category }}">
                            <th class="text-danger text-center"><strong>Total {{ $category }} :</strong></th>
                            <td class="text-center" colspan="2">
                                <strong>{{ $categoryData->first()->totalcatquantity }}</strong>
                            </td>
                            <td class="text-center" colspan="2">
                                <strong>{{ $categoryData->first()->totalcatpoids }}</strong>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Output total general quantity -->
                    <tr>
                        <th class="text-success text-center" colspan="2"><strong>Total General:</strong></th>
                        <td class="text-center"><strong>{{ $totalquantitygen }}</strong></td>
                        <td class="text-center"><strong>{{ $totalpoidsgen }}</strong></td>
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

        function printTable(divId) {
            // Get the content of the div
            var content = document.getElementById(divId).innerHTML;

            // Create a new window for printing
            var printWindow = window.open('', '_blank');

            // Write the content to the new window
            printWindow.document.write('<html><head><title>Print</title></head><body>');
            printWindow.document.write(content);
            printWindow.document.write('</body></html>');

            // Print the content
            printWindow.document.close();
            printWindow.print();
        }
    </script>
@stop
