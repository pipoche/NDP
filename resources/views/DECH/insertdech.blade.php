@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')


@stop
@section('content')
    <div class="row "> <!-- Centering the row -->

        <div class="col-md-3">

            <div class="card my-1" style="width: 100%">
                <div class="card-body " style="height: 100%;">
                    <h2 class="d-flex justify-content-center text-center">Insert Decharge</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bateau">Select Bateau</label>
                            <select name="" id="bateau" class="form-control border-dark rounded">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Maree">Maree:</label>
                            <input type="text" name="Maree" id="Maree" class="form-control border-dark rounded">
                        </div>

                    </div>
                    <table id="fishTableLeft" class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center">FISH name</th>
                                <th class="text-center" >Qté</th>
                                <th class="text-center" >Pds</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card my-1" style="width: 100%">
                <div class="card-body " style="height: 100%;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="DateDeSortie">Date S:</label>
                            <input type="date" name="DateDeSortie" id="DateDeSortie"
                                class="form-control border-dark rounded">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="DateDeEntrer">Date E:</label>
                            <input type="date" name="DateDeEntrer" id="DateDeEntrer"
                                class="form-control border-dark rounded">
                        </div>

                    </div>
                    <table id="fishTableLeftsecond" class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center">FISH name</th>
                                <th class="text-center" >Qté</th>
                                <th class="text-center" >Pds</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Table content -->
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card my-1" style="width: 100%">
                <div class="card-body d-flex justify-content-center align-items-center" style="height: 100%;">
                    <table id="fishTableRightsecond" class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center">FISH name</th>
                                <th class="text-center" >Qté</th>
                                <th class="text-center" >Pds</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Table content -->
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="col-md-3">
            <div class="card my-1" style="width: 100%">
                <div class="card-body " style="height: 100%;">
                    <table id="fishTableRight" class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="text-center" >FISH name</th>
                                <th class="text-center" >Qté</th>
                                <th class="text-center" >Pds</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Table content -->
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>

                    </table>
                    <div class="my-2 mt-5">
                        <form method="POST" action="{{ route('storeDech') }}">
                            @csrf
                            <input type="hidden" name="array1" id="array1Input">
                            <input type="hidden" name="array2" id="array2Input">
                            <!-- Other form inputs go here -->
                            <button type="submit" class="btn btn-danger" onclick="handlevalider()">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">


@stop

@section('js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script type="application/json" id="jsonData">
    [
        {
            "category": "CALAMAR",
            "total":  0,
            "data": [
                {
                    "name": "CALAMAR GG",
                    "CAL": "GG"
                },
                {
                    "name": "CALAMAR M",
                    "CAL": "M"
                },
                {
                    "name": "CALAMAR P",
                    "CAL": "P"
                },
                {
                    "name": "CALAMAR 2P",
                    "CAL": "2P"
                },
                {
                    "name": "CALAMAR 3P",
                    "CAL": "3P"
                },
                {
                    "name": "CALAMAR 4P",
                    "CAL": "4P"
                },
                {
                    "name": "CALAMAR Mix",
                    "CAL": "MIX"
                }
            ]
        },
        {
            "category": "MONGO",
            "total":  0,
            "data": [
                {
                    "name": "MONGO (1ere C) 1",
                    "CAL": "(1ere C) 1"
                },
                {
                    "name": "MONGO (1ere C) 2",
                    "CAL": "(1ere C) 2"
                },
                {
                    "name": "MONGO (1ere C) 3",
                    "CAL": "(1ere C) 3"
                },
                {
                    "name": "MONGO (1ere C) 4",
                    "CAL": "(1ere C) 4"
                },
                {
                    "name": "MONGO (1ere C) 5",
                    "CAL": "(1ere C) 5"
                },
                {
                    "name": "MONGO (1ere C) 6",
                    "CAL": "(1ere C) 6"
                },
                {
                    "name": "MONGO (1ere C) 7",
                    "CAL": "(1ere C) 7"
                },
                {
                    "name": "MONGO (1ere C) 8",
                    "CAL": "(1ere C) 8"
                },
                {
                    "name": "MONGO (2eme C) 1",
                    "CAL": "(2eme C) 1"
                },
                {
                    "name": "MONGO (1ere C) 2",
                    "CAL": "(2eme C) 2"
                },
                {
                    "name": "MONGO (2eme C) 3",
                    "CAL": "(2eme C) 3"
                },
                {
                    "name": "MONGO (2eme C) 4",
                    "CAL": "(2eme C) 4"
                },
                {
                    "name": "MONGO (2eme C) 5",
                    "CAL": "(2eme C) 5"
                },
                {
                    "name": "MONGO (2eme C) 6",
                    "CAL": "(2eme C) 6"
                },
                {
                    "name": "MONGO (2eme C) 7",
                    "CAL": "(2eme C) 7"
                },
                {
                    "name": "MONGO (2eme C) 8",
                    "CAL": "(2eme C) 8"
                },
                {
                    "name": "MONGO MIX",
                    "CAL": "MIX"
                }
            ]
        },
        {
            "category": "TAKO",
            "total":  0,
            "data": [
                {
                    "name": "TAKO (1ere C) 1",
                    "CAL": "(1ere C) 1"
                },
                {
                    "name": "TAKO (1ere C) 2",
                    "CAL": "(1ere C) 2"
                },
                {
                    "name": "TAKO (1ere C) 3",
                    "CAL": "(1ere C) 3"
                },
                {
                    "name": "TAKO (1ere C) 4",
                    "CAL": "(1ere C) 4"
                },
                {
                    "name": "TAKO (1ere C) 5",
                    "CAL": "(1ere C) 5"
                },
                {
                    "name": "TAKO (1ere C) 6",
                    "CAL": "(1ere C) 6"
                },
                {
                    "name": "TAKO (1ere C) 7",
                    "CAL": "(1ere C) 7"
                },
                {
                    "name": "TAKO (1ere C) 8",
                    "CAL": "(1ere C) 8"
                },
                {
                    "name": "TAKO (2eme C) 1",
                    "CAL": "(2eme C) 1"
                },
                {
                    "name": "TAKO (2eme C) 2",
                    "CAL": "(2eme C) 2"
                },
                {
                    "name": "TAKO (2eme C) 3",
                    "CAL": "(2eme C) 3"
                },
                {
                    "name": "TAKO (2eme C) 4",
                    "CAL": "(2eme C) 4"
                },
                {
                    "name": "TAKO (2eme C) 5",
                    "CAL": "(2eme C) 5"
                },
                {
                    "name": "TAKO (2eme C) 6",
                    "CAL": "(2eme C) 6"
                },
                {
                    "name": "TAKO (2eme C) 7",
                    "CAL": "(2eme C) 7"
                },
                {
                    "name": "TAKO (2eme C) 8",
                    "CAL": "(2eme C) 8"
                },
                {
                    "name": "TAKO ROTO 1",
                    "CAL": "ROTO 1"
                },
                {
                    "name": "TAKO ROTO 2",
                    "CAL": "ROTO 2"
                },
                {
                    "name": "TAKO ROTO",
                    "CAL": "ROTO"
                }
            ]
        },
        {
            "category": "CHOCO",
            "total":  0,
            "data": [
                {
                    "name": "CHOCO G",
                    "CAL": "G"
                },
                {
                    "name": "CHOCO M",
                    "CAL": "M"
                },
                {
                    "name": "CHOCO P",
                    "CAL": "P"
                },
                {
                    "name": "CHOCO 2P",
                    "CAL": "2P"
                },
                {
                    "name": "CHOCO 3P",
                    "CAL": "3P"
                },
                {
                    "name": "CHOCO MIX",
                    "CAL": "MIX"
                }
            ]
        },
        {
            "category": "LENGUADO",
            "total":  0,
            "data": [
                {
                    "name": "LENGUADO 0",
                    "CAL": "0"
                },
                {
                    "name": "LENGUADO 1",
                    "CAL": "1"
                },
                {
                    "name": "LENGUADO 2",
                    "CAL": "2"
                },
                {
                    "name": "LENGUADO 3E",
                    "CAL": "3E"
                },
                {
                    "name": "LENGUADO 3",
                    "CAL": "3"
                },
                {
                    "name": "LENGUADO 4",
                    "CAL": "4"
                },
                {
                    "name": "LENGUADO 4E",
                    "CAL": "4E"
                },
                {
                    "name": "LENGUADO 5",
                    "CAL": "5"
                },
                {
                    "name": "LENGUADO 6",
                    "CAL": "6"
                },
                {
                    "name": "LENGUADO 7",
                    "CAL": "7"
                },
                {
                    "name": "LENGUADO 8",
                    "CAL": "8"
                },
                {
                    "name": "LENGUADO MIX",
                    "CAL": "MIX"
                },
                {
                    "name": "LENGUADO RUBIO",
                    "CAL": "RUBIO"
                }
            ]
        },
        {
            "category": "DENTON",
            "total":  0,
            "data": [
                {
                    "name": "DENTON G",
                    "CAL": "G"
                },
                {
                    "name": "DENTON M",
                    "CAL": "M"
                },
                {
                    "name": "DENTON P",
                    "CAL": "P"
                },
                {
                    "name": "DENTON 2P",
                    "CAL": "2P"
                },
                {
                    "name": "DENTON 3P",
                    "CAL": "3P"
                },
                {
                    "name": "DENTON 4P",
                    "CAL": "4P"
                },
                {
                    "name": "DENTON MIX",
                    "CAL": "MIX"
                }
            ]
        },
        {
            "category": "EUROPE",
            "total":  0,
            "data": [
                {
                    "name": "ACEDIA G",
                    "CAL": "G"
                },
                {
                    "name": "ACEDIA M",
                    "CAL": "M"
                },
                {
                    "name": "ACEDIA P",
                    "CAL": "p"
                },
                {
                    "name": "BURRO S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "CAZON G",
                    "CAL": "G"
                },
                {
                    "name": "CAZON M",
                    "CAL": "M"
                },
                {
                    "name": "CAZON P",
                    "CAL": "P"
                },
                {
                    "name": "CONGRIO S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "CORVINA T",
                    "CAL": "T"
                },
                {
                    "name": "CORVINA S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "CORVINA R",
                    "CAL": "R"
                },
                {
                    "name": "DORADA G",
                    "CAL": "G"
                },
                {
                    "name": "DORADA M",
                    "CAL": "M"
                },
                {
                    "name": "DORADA P",
                    "CAL": "P"
                },
                {
                    "name": "HERRERA G",
                    "CAL": "G"
                },
                {
                    "name": "HERRERA M",
                    "CAL": "M"
                },
                {
                    "name": "HERRERA P",
                    "CAL": "P"
                },
                {
                    "name": "RATA S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "RAYA S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "SALAMONETTE G",
                    "CAL": "G"
                },
                {
                    "name": "SALAMONETTE M",
                    "CAL": "M"
                },
                {
                    "name": "SALAMONETTE P",
                    "CAL": "P"
                },
                {
                    "name": "SAMPIETRO G",
                    "CAL": "G"
                },
                {
                    "name": "SAMPIETRO M",
                    "CAL": "M"
                },
                {
                    "name": "SAMPIETRO P",
                    "CAL": "P"
                },
                {
                    "name": "SARGO G",
                    "CAL": "G"
                },
                {
                    "name": "SARGO M",
                    "CAL": "M"
                },
                {
                    "name": "SARGO P",
                    "CAL": "P"
                },
                {
                    "name": "SEPIOLA G",
                    "CAL": "G"
                },
                {
                    "name": "SEPIOLA M",
                    "CAL": "M"
                },
                {
                    "name": "ROKERA G",
                    "CAL": "G"
                },
                {
                    "name": "MERLUZA S/C G",
                    "CAL": "S/C G"
                },
                {
                    "name": "MERLUZA M",
                    "CAL": "M"
                },
                {
                    "name": "MERLUZA P",
                    "CAL": "P"
                },
                {
                    "name": "POMPANO",
                    "CAL": ""
                },
                {
                    "name": "CHERNA",
                    "CAL": ""
                }
            ]
        },
        {
            "category": "AFRIQUE",
            "total":  0,
            "data": [
                {
                    "name": "BESUGO",
                    "CAL": ""
                },
                {
                    "name": "BURRO R",
                    "CAL": "R"
                },
                {
                    "name": "CHOPA",
                    "CAL": ""
                },
                {
                    "name": "PARGO G",
                    "CAL": "G"
                },
                {
                    "name": "PARGO M",
                    "CAL": "M"
                },
                {
                    "name": "PARGO P",
                    "CAL": "P"
                },
                {
                    "name": "RASCASIO",
                    "CAL": ""
                },
                {
                    "name": "RONCADOR",
                    "CAL": ""
                },
                {
                    "name": "SABLE S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "VERRUGATO R",
                    "CAL": "R"
                },
                {
                    "name": "VERRUGATO S/C",
                    "CAL": "S/C"
                },
                {
                    "name": "GALLINA",
                    "CAL": ""
                },
                {
                    "name": "POMPANO",
                    "CAL": ""
                },
                {
                    "name": "ROKERA",
                    "CAL": ""
                }
            ]
        }
    ]
</script>

    <script>
        // Fetch the JSON data from the script tag
        var jsonDataElement = document.getElementById('jsonData');
        var jsonDataString = jsonDataElement.textContent.trim();

        // Parse the JSON data
        const data = JSON.parse(jsonDataString)


        var leftTableBody = document.querySelector('#fishTableLeft tbody');
        var rightTableBody = document.querySelector('#fishTableRight tbody');
        var SecondrightTableBody = document.querySelector('#fishTableRightsecond tbody');
        var SecondleftTableBody = document.querySelector('#fishTableLeftsecond tbody');

        console.log(data)

        data.map((cate, index) => {

            if (cate.category === "DENTON" || cate.category === "AFRIQUE") {
                cate.data.map((fish) => {
                    var tr = document.createElement('tr');

                    var nameCell = document.createElement('td');

                    nameCell.textContent = fish.name;
                    nameCell.className = "col-6 p-0"
                    nameCell.id = cate.category


                    var quantityCell = document.createElement('td');
                    quantityCell.className = "col-3 p-0"
                    var quantityInput = document.createElement('input');
                    quantityInput.type = 'number'; // Set input type to number
                    quantityInput.min = '0'; // Set minimum value to 0
                    quantityInput.value = '0'; // Set default value to 0
                    quantityInput.className = 'text-center form-control';
                    quantityInput.id = cate.category;

                    var poidsCell = document.createElement('td');
                    poidsCell.className = "col-3 p-0";
                    var poidsInput = document.createElement('input');
                    poidsInput.type = 'number'; // Set input type to number
                    poidsInput.min = '0'; // Set minimum value to 0
                    poidsInput.value = '0'; // Set default value to 0
                    poidsInput.className = 'text-center form-control';
                    poidsInput.id = cate.category + "_poids"; // Unique id for poids input

                    quantityInput.addEventListener('keypress', function(event) {
                        if (event.key === 'Enter') {
                            // Move to the next input field
                            var nextInput = tr.nextElementSibling.querySelector('input');
                            if (nextInput) {
                                nextInput.focus();
                            }
                        }
                    });

                    


                    quantityCell.appendChild(quantityInput);
                    poidsCell.appendChild(poidsInput);

                    // Append cells to the row
                    tr.appendChild(nameCell);
                    tr.appendChild(quantityCell);
                    tr.appendChild(poidsCell);

                    // Append the row to the table body
                    leftTableBody.appendChild(tr);



                })



            } else if (cate.category === "EUROPE") {
                cate.data.map((fish) => {
                    var tr = document.createElement('tr');
                  

                    var nameCell = document.createElement('td');
                    nameCell.textContent = fish.name;
                    nameCell.className = "col-md-6 p-0"
                    nameCell.id = cate.category



                    var quantityCell = document.createElement('td');
                    quantityCell.className = "col-md-3 p-0"
                    var quantityInput = document.createElement('input');
                    quantityInput.type = 'number'; // Set input type to number
                    quantityInput.min = '0'; // Set minimum value to 0
                    quantityInput.value = '0'; // Set default value to 0
                    quantityInput.className = 'text-center form-control ';
                    quantityInput.id = cate.category;

                    var poidsCell = document.createElement('td');
                    poidsCell.className = "col-md-3 p-0";
                    var poidsInput = document.createElement('input');
                    poidsInput.type = 'number'; // Set input type to number
                    poidsInput.min = '0'; // Set minimum value to 0
                    poidsInput.value = '0'; // Set default value to 0
                    poidsInput.className = 'text-center form-control';
                    poidsInput.id = cate.category + "_poids"; 



                    quantityInput.addEventListener('keypress', function(event) {
                        if (event.key === 'Enter') {
                            // Move to the next input field
                            var nextInput = tr.nextElementSibling.querySelector('input');
                            if (nextInput) {
                                nextInput.focus();
                            }
                        }
                    });

                    quantityCell.appendChild(quantityInput);
                    poidsCell.appendChild(poidsInput);

                    // Append cells to the row
                    tr.appendChild(nameCell);
                    tr.appendChild(quantityCell);
                    tr.appendChild(poidsCell);

                    // Append the row to the table body
                    rightTableBody.appendChild(tr);
                })


            } else if (cate.category === "CALAMAR" || cate.category === "MONGO" || cate.category === "CHOCO") {
                cate.data.map((fish) => {
                    var tr = document.createElement('tr');

                    var nameCell = document.createElement('td');
                    nameCell.textContent = fish.name;
                    nameCell.className = "col-6 p-0"
                    nameCell.id = cate.category

                    var quantityCell = document.createElement('td');
                    quantityCell.className = " p-0"
                    var quantityInput = document.createElement('input');
                    quantityInput.type = 'number'; // Set input type to number
                    quantityInput.min = '0'; // Set minimum value to 0
                    quantityInput.value = '0'; // Set default value to 0
                    quantityInput.className = 'text-center form-control ';
                    quantityInput.id = cate.category;

                    var poidsCell = document.createElement('td');
                    poidsCell.className = " p-0";
                    var poidsInput = document.createElement('input');
                    poidsInput.type = 'number'; // Set input type to number
                    poidsInput.min = '0'; // Set minimum value to 0
                    poidsInput.value = '0'; // Set default value to 0
                    poidsInput.className = 'text-center form-control';
                    poidsInput.id = cate.category + "_poids"; // Unique id for poids input


                    quantityInput.addEventListener('keypress', function(event) {
                        if (event.key === 'Enter') {
                            // Move to the next input field
                            var nextInput = tr.nextElementSibling.querySelector('input');
                            if (nextInput) {
                                nextInput.focus();
                            }
                        }
                    });

                    quantityCell.appendChild(quantityInput);
                    poidsCell.appendChild(poidsInput);

                    // Append cells to the row
                    tr.appendChild(nameCell);
                    tr.appendChild(quantityCell);
                    tr.appendChild(poidsCell);

                    // Append the row to the table body
                    SecondrightTableBody.appendChild(tr);
                })


            } else {
                cate.data.map((fish) => {
                    var tr = document.createElement('tr');

                    var nameCell = document.createElement('td');
                    nameCell.textContent = fish.name;
                    nameCell.className = "col-6 p-0"
                    nameCell.id = cate.category

                    var quantityCell = document.createElement('td');
                    quantityCell.className = "col-3 p-0"
                    var quantityInput = document.createElement('input');
                    quantityInput.type = 'number'; // Set input type to number
                    quantityInput.min = '0'; // Set minimum value to 0
                    quantityInput.value = '0'; // Set default value to 0
                    quantityInput.className = 'text-center form-control ';
                    quantityInput.id = cate.category;

                    var poidsCell = document.createElement('td');
                    poidsCell.className = "col-3 p-0";
                    var poidsInput = document.createElement('input');
                    poidsInput.type = 'number'; // Set input type to number
                    poidsInput.min = '0'; // Set minimum value to 0
                    poidsInput.value = '0'; // Set default value to 0
                    poidsInput.className = 'text-center form-control';
                    poidsInput.id = cate.category + "_poids"; // Unique id for poids input


                    quantityInput.addEventListener('keypress', function(event) {
                        if (event.key === 'Enter') {
                            // Move to the next input field
                            var nextInput = tr.nextElementSibling.querySelector('input');
                            if (nextInput) {
                                nextInput.focus();
                            }
                        }
                    });

                    quantityCell.appendChild(quantityInput);
                    poidsCell.appendChild(poidsInput);

                    // Append cells to the row
                    tr.appendChild(nameCell);
                    tr.appendChild(quantityCell);
                    tr.appendChild(poidsCell);

                    // Append the row to the table body
                    SecondleftTableBody.appendChild(tr);
                })


            }

        })





        const handlevalider = (e) => {
            const dataaaa = []
            var leftTableBody = document.querySelectorAll('#fishTableLeft tbody tr');
            var rightTableBody = document.querySelectorAll('#fishTableRight tbody tr');
            var SecondrightTableBody = document.querySelectorAll('#fishTableRightsecond tbody tr');
            var SecondleftTableBody = document.querySelectorAll('#fishTableLeftsecond tbody tr');

            const maree = document.getElementById('Maree').value;
            const bateau = document.getElementById('bateau').value;
            const date_s = document.getElementById('DateDeSortie').value;
            const date_e = document.getElementById('DateDeEntrer').value;

            const array = [maree, bateau, date_s, date_e]


            function processRows(rows) {
                rows.forEach(row => {
                    const cells = row.cells;
                    if (cells && cells.length > 0) {
                        const fishname = cells[0].textContent.trim();
                        const category = cells[0].id;
                        const inputelement = row.cells[1].querySelector('input');
                        const quantity = inputelement ? inputelement.value.trim() : '00.00';
                        const input = row.cells[2].querySelector('input');
                        const poids = input ? input.value.trim() : '00.00';
                        const object = {
                            category: category,
                            fishname: fishname,
                            fishquantity: quantity,
                            fishpoids: poids
                        };
                        dataaaa.push(object);
                    }
                });
            }
            if (leftTableBody.length > 0) {
                processRows(leftTableBody);

                
            }

            if (SecondleftTableBody.length > 0) {
                processRows(SecondleftTableBody);
                
            }

            if (rightTableBody.length > 0) {
                processRows(rightTableBody);

            }


            if (SecondrightTableBody.length > 0) {
                processRows(SecondrightTableBody);
            }
            console.log(dataaaa);
            console.log(array);


            document.getElementById("array1Input").value = JSON.stringify(dataaaa);
            document.getElementById("array2Input").value = JSON.stringify(array);

            this.submit();
            
        }
    </script>
@stop
