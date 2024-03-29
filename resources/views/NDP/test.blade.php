<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>

    </style>
</head>

<body>


    <div class="row ">
        <table>
            <tr>
                <td><div class="col-md-4">

                    <div class="card my-1" style="width: 100%;  ">
                        <div class="card-body ">
                            <h2 class="d-flex justify-content-center text-center">NDP : {{ $maree }}</h2>
                            <div class="form-row">
                                <div class="form-group col-md-4 p-0 mb-0">
                                    <p> bateau: {{ $bateau }}</p>
        
        
                                </div>
                                <div class=" p-0 form-group col-md-4 mb-0">
                                    <p>date de Sortie: {{ $dateS }}</p>
        
                                </div>
                                <div class=" p-0 form-group col-md-4 mb-0">
                                    <p> date d'Entrée: {{ $dateE }}</p>
        
                                </div>
        
        
                            </div>
                            <table id="fishTableLeft" class="table table-bordered table-striped" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">FISH name</th>
                                        <th class="text-center">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($groupedData as $category => $categoryData)
                                        @if ($category == 'DENTON' || $category == 'EUROPE' || $category == 'AFRIQUE')
                                            @foreach ($categoryData as $item)
                                                <tr id="{{ $category }}">
                                                    <td class="text-center p-0">{{ $item->fishname }}</td>
                                                    <td class="text-center p-0">
                                                        <p id="canchange" class="mb-0">
                                                            {{ $item->fishquantity }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="total" id="{{ $category }}">
                                                <th class="text-danger text-center p-0"><strong>Total
                                                        {{ $category }}
                                                        :</strong></th>
                                                <td class="text-center p-0">
                                                    <strong>{{ $categoryData->first()->totalcategory }}</strong>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
        
                                    <tr>
                                        <th class="text-success text-center p-0"><strong>Total General:</strong>
                                        </th>
                                        <td class="text-center p-0"><strong>{{ $totalgen }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                </td>
                <td>

                    <div class="col-md-4">
                        <div class="card my-1" style="width: 100%;">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 100%;">
                                <table id="fishTableRightsecond" class="table table-bordered table-striped" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">FISH name</th>
                                            <th class="text-center">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($groupedData as $category => $categoryData)
                                            @if ($category != 'DENTON' && $category != 'EUROPE' && $category != 'AFRIQUE')
                                                @foreach ($categoryData as $item)
                                                    <tr id="{{ $category }}">
                                                        <td class="text-center p-0">{{ $item->fishname }}</td>
                                                        <td class="text-center p-0">
                                                            <p id="canchange"class="mb-0">{{ $item->fishquantity }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="total" id="{{ $category }}">
                                                    <th class="text-danger text-center p-0"><strong>Total
                                                            {{ $category }}
                                                            :</strong>
                                                    </th>
                                                    <td class="text-center p-0">
                                                        <strong>{{ $categoryData->first()->totalcategory }}</strong>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                </td>
            </tr>
        </table>
        

        


        


        
    </div>

</body>

</html>
