@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Employes List')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card my-3 d-flex justify-content-center">
                    <div class="card-header">
                        <h3 class="text-center text-uppercase">
                            Export Informations
                        </h3>
                    </div>
                    <form>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="FactureCode1" class=" mb-0 text-dark col-md-6">Nº D'Export :</label>
                                        <input type="text" name="FactureCode1" id="FactureCode1"
                                            class="form-control  customradius " placeholder="EXPxxxx....">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="FactureCode" class=" mb-0 text-dark col-md-6">Nº Dum :</label>
                                        <input type="text" name="FactureCode" id="FactureCode"
                                            class="form-control  customradius  " placeholder="xxx....">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="FactureCode" class=" mb-0 text-dark col-md-6">Destination</label>
                                        <input type="text" name="FactureCode" id="FactureCode"
                                            class="form-control  customradius mb-2 " placeholder="Destination....">
                                            
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-4">
                                    <div class="form-group mb-2">
                                        <select class="form-control  customradius" name="Pays" id="Pays">
                                            <option value="" disabled selected>Pays</option>
                                            <option value="United States (US)">United States (US)</option>
                                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                            <option value="Canada (CA)">Canada (CA)</option>
                                            <option value="Australia (AU)">Australia (AU)</option>
                                            <option value="Germany (DE)">Germany (DE)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-4">
                                    <div class="form-group mb-2">
                                        <select class="form-control  customradius" name="Ville" id="Ville">
                                            <option value="" disabled selected>ville</option>
                                            <option value="Los Angeles">Los Angeles</option>
                                            <option value="Chicago">Chicago</option>
                                            <option value="Houston">Houston</option>
                                            <option value="Phoenix">Phoenix</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Birmingham">Birmingham</option>
                                            <option value="Glasgow">Glasgow</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="FactureCode1" class=" mb-0 text-dark col-md-6">Transport :</label>
                                        <input type="text" name="FactureCode1" id="FactureCode1"
                                            class="form-control  customradius " placeholder="xxxx-xx">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="FactureCode" class=" mb-0 text-dark col-md-6">Devise :</label>
                                        <input type="text" name="FactureCode" id="FactureCode"
                                            class="form-control  customradius  " placeholder="xxx">
                                    </div>
                                </div>




                            </div>







                           


                        </div>
                        <div class="card-footer bg-white">
                            <div class="form-group col-12">
                                <ul class="list-unstyled d-flex justify-content-between mt-3 ">
                                    <li>
                                        <a href="{{ Route('firstform') }}"><button
                                                class="btn text-white border-danger btn-danger"><strong>Back</strong></button></a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('exportpage') }}"><button
                                                class="btn text-white border-success btn-success "><strong>Valider</strong></button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </form>




                </div>
            </div>
        </div>

    </div>


@stop

@section('css')

    <style>
        .margincustom {
            margin-left: 10rem;
            margin-right: 10rem;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;

        }

        .customradius {
            border-color: #484964;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .custom-btn {
            font-size: 30px;
            border-radius: 10px;
            background-color: #9CA7BE;
            width: 150px;
            height: 60px;
        }

        .custom-btn:hover {
            background-color: white;
            color: #484964;
        }
    </style>

@stop

@section('js')
    <script></script>

@stop
