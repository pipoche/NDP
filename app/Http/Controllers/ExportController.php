<?php

namespace App\Http\Controllers;

use App\Models\Export;
use App\Http\Requests\StoreExportRequest;
use App\Http\Requests\UpdateExportRequest;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index()
    {
        $shortdata = Export::select('numexport', 'numdum', 'destination', 'transport', 'devise' ,'created_at')->distinct()->get();

        return view('Export.index', compact('shortdata'));
    }
    public function store(Request $request)
    {

        $array1 = json_decode($request->input('array1'), true);
        $array2 = json_decode($request->input('array2'), true);
        $array3 = json_decode($request->input('array3'), true);

        foreach ($array1 as $data) {
            Export::create([
                'numexport' => $array3[0],
                'numdum' => $array3[1],
                'destination' => $array3[2],
                'pays' => $array3[3],
                'ville' => $array3[4],
                'transport' => $array3[5],
                'devise' => $array3[6],
                'facturecode' => $data["facture"],
                'maree' => $data["maree"],
                'decharge' => $data["decharge"],
                'poids' => $data["poids"],
                'montant' => $data["montant"],
                'totalpoids' => $array2[0],
                'totalmontant' => $array2[1],
            
            ]);
        }
        return redirect()->route("exportpage");
    }

    public function view($numexport){
        $exportdata =  Export::select('created_at','numexport', 'numdum', 'destination','ville','pays', 'transport', 'devise' )->where('numexport' , $numexport)->distinct()->get();

        $facturedata = Export::select('facturecode','maree', 'decharge', 'poids', 'montant' )->where('numexport' , $numexport)->distinct()->get();

        $totalpoids = Export::where('numexport', $numexport)->pluck('totalpoids')->first();
        $totalmontant = Export::where('numexport', $numexport)->pluck('totalmontant')->first();

        return view('Export.voirexport' , compact('exportdata','facturedata','totalpoids','totalmontant' ,'numexport'));

    }
}
