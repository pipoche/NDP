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
                                <button class="btn   costum-style" style="color: white;" id="facture-btn"> <i
                                        class="fas fa-file-invoice"></i>&nbsp;
                                    <strong>Facture</strong>
                                </button>
                            </div>
                            <div class="col-sm-8" style="display: flex; align-items: center;">
                                <i class="fas fa-circle d-block" id="circle1" style="color:#9CA7BE ; "></i>
                                <hr style="flex-grow: 1; border-top: 2px solid black; margin: 0;" id="line">
                                <i class="fas fa-circle d-none" id="circle2" style="color:#9CA7BE ; "></i>

                            </div>
                            <div class="col-sm-2 text-right">
                                <button class="btn" style="color:#484964;" id="export-btn"><i
                                        class="fas fa-file-export"></i>&nbsp;
                                    <strong>Export</strong>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body d-block" id="form1">
                        <div class="card">

                            <div class="card-body">
                                <form>

                                    <div class="row">
                                        <div class="col-sm-12 ">

                                            <label for="FactureCode1" class="mb-0 text-dark col-md-6">FactureCode :</label>
                                            <input type="text" name="FactureCode1" id="FactureCode1"
                                                class="form-control customradius" placeholder="xxx-2024">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="maree" class="mb-0">Maree :</label>
                                                <input type="text" name="Maree" id="maree"
                                                    class="form-control  customradius  " placeholder="xxx-2024">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label for="decharge" class="mb-0">DECHARGE :</label>
                                                <input type="number" min="0" name="FactureCode1" id="decharge"
                                                    class="form-control   customradius" placeholder="xx xxx.xx">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="poids" class="mb-0">Poids :</label>
                                                <input type="number" min="0" name="FactureCode1" id="poids"
                                                    class="form-control   customradius" placeholder="xx xxx.xx">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="montant" class="mb-0">Montant :</label>
                                                <input type="number" min="0" name="FactureCode1" id="montant"
                                                    class="form-control   customradius" placeholder="xx xxx.xx">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 d-flex justify-content-end mb-0">
                                                <button class="btn btn-secondary mr-5" id="resetbtn">Reset</button>
                                                <button class="btn btn-primary " id="validerBtn">Valider</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>

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
                                                <th class="text-center" style="color:#484964;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-center" style="color:#484964;">
                                                    <strong>Total
                                                        :</strong>
                                                </td>
                                                <td class="text-center bold-text" style="color: #484964;"
                                                    id="totalpoids"></td>
                                                <td class="text-center bold-text"
                                                    style="color: #484964;"id="totalmontant"></td>
                                                <td></td> <!-- Added an empty cell for alignment -->
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="form-group col-12">
                                    <ul class="list-unstyled d-flex justify-content-between mt-5 ">
                                        <li>
                                            <button class="btn text-white border-danger btn-danger"><strong>Leave</strong>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn text-white border-success btn-success  "
                                                id="next"><strong>Next</strong>
                                            </button>
                                        </li>


                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>




                    <div class="card-body d-none" id="form2">
                        <div class="card">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-2">
                                            <label for="FactureCode1" class=" mb-0 text-dark col-md-6">Nº D'Export
                                                :</label>
                                            <input type="text" name="FactureCode1" id="export"
                                                class="form-control  customradius " placeholder="EXPxxxx....">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-2">
                                            <label for="FactureCode" class=" mb-0 text-dark col-md-6">Nº Dum :</label>
                                            <input type="text" name="FactureCode" id="dum"
                                                class="form-control  customradius  " placeholder="xxx....">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label for="FactureCode" class=" mb-0 text-dark col-md-6">Destination</label>
                                            <input type="text" name="FactureCode" id="destination"
                                                class="form-control  customradius mb-2 " placeholder="Destination....">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mt-4">
                                        <div class="form-group mb-2">
                                            <select class="form-control  customradius" name="Pays" id="pays">
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
                                            <select class="form-control  customradius" name="Ville" id="ville">
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
                                            <input type="text" name="FactureCode1" id="transport"
                                                class="form-control  customradius " placeholder="xxxx-xx">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label for="FactureCode" class=" mb-0 text-dark col-md-6">Devise :</label>
                                            <input type="text" name="FactureCode" id="devise"
                                                class="form-control  customradius  " placeholder="xxx">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ">
                                <div class="form-group col-12">
                                    <ul class="list-unstyled d-flex justify-content-between mt-5 ">
                                        <li>
                                            <button class="btn text-white border-danger btn-danger"
                                                id="back"><strong>Back</strong></button>

                                        </li>
                                        <li>
                                            <form method="POST" action="{{ Route('exportstore') }}" id="senddata">
                                                @csrf
                                                <input type="hidden" name="array1" id="array1Input">
                                                <input type="hidden" name="array2" id="array2Input">
                                                <input type="hidden" name="array3" id="array3Input">
                                                <!-- Other form inputs go here -->
                                                <button class="btn text-white border-success btn-success  "
                                                    id="submitdata" type="submit"><strong>Valider</strong></button>
                                            </form>
                                        </li>

                                    </ul>
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


    <script>
        const array1 = [];
        const array2 = [];
        const array3 = [];

        sumtotal()

        function sumtotal() {
            console.log("calculing total ...")
            var totalpoids = 0;
            var totalmontant = 0;
            let arrpoids = document.querySelectorAll("#calculatedpoids")
            let arrmontant = document.querySelectorAll("#calculatedmontant")
            arrpoids.forEach(element => {
                let poids = parseFloat(element.textContent);
                totalpoids += poids
            });
            arrmontant.forEach(element => {
                let montant = parseFloat(element.textContent);
                totalmontant += montant
            });

            console.log(totalmontant)
            console.log(totalpoids)

            document.getElementById("totalpoids").textContent = totalpoids;
            document.getElementById("totalmontant").textContent = totalmontant;



        }







        // Function to handle the addition of a new row
        function addRow() {
            const facturecode = document.getElementById("FactureCode1").value;
            const maree = document.getElementById("maree").value;
            const montant = document.getElementById("montant").value;
            const poids = document.getElementById("poids").value;
            const decharge = document.getElementById("decharge").value;
            /*const Facture = {
                facturecode: facturecode,
                maree: maree,
                montant: montant,
                poids: poids,
                decharge: decharge
            }
            data.push(Facture)
            console.log(data);*/
            if (facturecode && maree && montant && poids && decharge) {
                var tr = document.createElement("tr");
                var table = document.getElementById('myTable');
                var tbody = document.getElementById('tbody')

                var facturecell = document.createElement("td");
                facturecell.textContent = facturecode;
                facturecell.style.color = "#9CA7BE";
                facturecell.className = "text-center";
                tr.appendChild(facturecell)


                var mareecell = document.createElement("td");
                mareecell.textContent = maree;
                mareecell.style.color = "#9CA7BE";
                mareecell.className = "text-center";
                tr.appendChild(mareecell)

                var dechargecell = document.createElement("td");
                dechargecell.textContent = decharge;
                dechargecell.style.color = "#9CA7BE";
                dechargecell.className = "text-center";
                tr.appendChild(dechargecell)

                var poidscell = document.createElement("td");
                poidscell.textContent = poids;
                poidscell.style.color = "#9CA7BE";
                poidscell.className = "text-center";
                poidscell.id = "calculatedpoids"


                tr.appendChild(poidscell)

                var montantcell = document.createElement("td");
                montantcell.textContent = montant;
                montantcell.style.color = "#9CA7BE";
                montantcell.className = "text-center";
                montantcell.id = "calculatedmontant"

                tr.appendChild(montantcell)


                // Create the new row and its cells



                var action = document.createElement("td");
                action.className = "text-center";

                var btn = document.createElement("button");
                btn.className = "btn delete-btn";
                var icon = document.createElement("i");
                icon.className = "fas fa-trash";
                btn.appendChild(icon);
                action.appendChild(btn);
                tr.appendChild(action);

                // Append the new row to the table
                tbody.appendChild(tr)
                table.appendChild(tbody);

                // Clear input fields
                document.getElementById('FactureCode1').value = '';
                document.getElementById('maree').value = '';
                document.getElementById('montant').value = '';
                document.getElementById('poids').value = '';
                document.getElementById('decharge').value = '';

                // Attach event listener for the new delete button
                btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    console.log("Delete button clicked");
                    var row = this.closest("tr");
                    if (row) {
                        row.remove();
                        sumtotal()
                    } else {
                        console.error("Parent row not found");
                    }
                });

            }



        }

        // Attach event listener for Valider button
        document.getElementById("validerBtn").addEventListener("click", function(e) {
            e.preventDefault(); // Prevent form submission
            addRow(); // Add new row
            sumtotal()
        });

        document.getElementById("next").addEventListener("click", function(e) {



            e.preventDefault();

            const rows = document.querySelectorAll('#myTable tbody tr')
            rows.forEach(row => {
                const cells = row.cells;
                if (cells && cells.length > 0) {
                    const lefacture = cells[0].textContent;
                    const lemaree = cells[1].textContent;
                    const ledecharge = cells[2].textContent;
                    const lepoids = cells[3].textContent;
                    const lemontant = cells[4].textContent;
                    const object = {
                        facture: lefacture,
                        maree: lemaree,
                        decharge: ledecharge,
                        poids: lepoids,
                        montant: lemontant,
                    };

                    array1.push(object);
                    console.log(object)
                }
            });
            const total_poids = document.getElementById("totalpoids").textContent
            const total_montant = document.getElementById("totalmontant").textContent
            array2.push(total_poids, total_montant)

            console.log(array1)
            console.log(array2)




            document.getElementById("form1").className = "card-body d-none";
            document.getElementById("form2").className = "card-body d-block";
            document.getElementById("export-btn").className = "btn costum-style"
            document.getElementById("export-btn").style.color = "white";
            document.getElementById("facture-btn").style.color = "#484964";
            document.getElementById("facture-btn").className = "btn";
            document.getElementById("circle2").className = "fas fa-circle d-block";
            document.getElementById("circle1").className = "fas fa-circle d-none";
            document.getElementById("line").style.flexGrow = "1";
            document.getElementById("line").style.borderTop = "2px solid #9CA7BE";
            document.getElementById("line").style.margin = "0";




            console.log("next page success !!!!");
        })

        document.getElementById("back").addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("form1").className = "card-body d-block";
            document.getElementById("form2").className = "card-body d-none";
            document.getElementById("export-btn").className = "btn"
            document.getElementById("export-btn").style.color = "#484964";
            document.getElementById("facture-btn").style.color = "white";
            document.getElementById("facture-btn").className = " btn costum-style";
            document.getElementById("circle2").className = "fas fa-circle d-none";
            document.getElementById("circle1").className = "fas fa-circle d-block";
            document.getElementById("line").style.flexGrow = "1";
            document.getElementById("line").style.borderTop = "2px solid black";
            document.getElementById("line").style.margin = "0";

            array1.length = 0;
            array2.length = 0;



            console.log("back page success !!!!")


        })

        // Attach event listener for Reset button
        document.getElementById('resetbtn').addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById('FactureCode1').value = '';
            document.getElementById('maree').value = '';
            document.getElementById('montant').value = '';
            document.getElementById('poids').value = '';
            document.getElementById('decharge').value = '';
        });

        // Attach event listener for existing delete buttons
        document.querySelectorAll(".delete-btn").forEach(function(button) {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                console.log("Delete button clicked");
                var row = this.closest("tr");
                if (row) {
                    row.remove();
                    sumtotal()
                } else {
                    console.error("Parent row not found");
                }
            });
        });
        document.querySelectorAll("#submitdata").forEach(function(button) {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                const theexport = document.getElementById("export").value;
                const thedum = document.getElementById("dum").value;
                const thedestination = document.getElementById("destination").value;
                const thepays = document.getElementById("pays").value;
                const theville = document.getElementById("ville").value;
                const thetransport = document.getElementById("transport").value;
                const thedevise = document.getElementById("devise").value;

                array3.push(theexport, thedum, thedestination, thepays, theville, thetransport, thedevise);
                console.log(array3)


                document.getElementById("array1Input").value = JSON.stringify(array1);
                document.getElementById("array2Input").value = JSON.stringify(array2);
                document.getElementById("array3Input").value = JSON.stringify(array3);

                document.getElementById("export").value = '';
                document.getElementById("dum").value = '';
                document.getElementById("destination").value = '';
                document.getElementById("pays").value = '';
                document.getElementById("ville").value = '';
                document.getElementById("transport").value = '';
                document.getElementById("devise").value = '';

                const form = document.getElementById("senddata");
                form.submit();

            });
        });
    </script>

@stop
