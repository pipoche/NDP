<?php

namespace App\Http\Controllers;

use App\Models\Ecart;
use App\Http\Requests\StoreEcartRequest;
use App\Http\Requests\UpdateEcartRequest;
use App\Models\Decharge;
use App\Models\Ndp;

class EcartController extends Controller
{


    public function index()
    {
        $data = Ecart::select('maree', 'dechqtetotalgen', 'ndptotalgen', 'dechpoidstotalgen', 'ecarttotalgen')->distinct()->get();

        return view('Ecart.index', compact('data'));
    }


    public function calcule_ecart()
    {
        $ndps = Ndp::all();
        foreach ($ndps as $ndp) {

            $decharge = Decharge::where('maree', $ndp->maree)
                ->where('categoryname', $ndp->categoryname)
                ->where('fishname', $ndp->fishname)
                ->first(); //


            if ($decharge) {
                $difference_quantity = $decharge->fishquantity - $ndp->fishquantity;


                Ecart::create([
                    'maree' => $ndp->maree,
                    'bateau' => $ndp->bateau,
                    'dateE' => $ndp->dateE,
                    'dateS' => $ndp->dateS,
                    'fishname' => $ndp->fishname,
                    'categoryname' => $ndp->categoryname,
                    'ndpfishquantity' => $ndp->fishquantity,
                    'ndpcatquantitytotal' => $ndp->totalcategory,
                    'ndptotalgen' => $ndp->totalgen,
                    'dechQte' => $decharge->fishquantity,
                    'dechpoids' => $decharge->fishpoids,
                    'dechcatpoidstotal' => $decharge->totalcatpoids,
                    'dechcatQtetotal' => $decharge->totalcatquantity,
                    'dechqtetotalgen' => $decharge->totalquantitygen,
                    'dechpoidstotalgen' => $decharge->totalpoidsgen,
                    'ecartvalue' => $difference_quantity,
                    'ecartcattotal' =>  $decharge->totalcatquantity - $ndp->totalcategory,
                    'ecarttotalgen' => $decharge->totalquantitygen - $ndp->totalgen
                ]);
            }
        }


        return    redirect()->route("homeecart");
    }


    public function view($maree)
    {

        $data = Ecart::where('maree', $maree)
            ->distinct()
            ->get();

        $groupeddata = $data->groupBy('categoryname');


        $ndptotalgen = Ecart::where('maree', $maree)->pluck('ndptotalgen')->first();
        $dechqtetotalgen = Ecart::where('maree', $maree)->pluck('dechqtetotalgen')->first();

        $dechpoidstotalgen = Ecart::where('maree', $maree)->pluck('dechpoidstotalgen')->first();
        $ecarttotalgen = Ecart::where('maree', $maree)->pluck('ecarttotalgen')->first();


        return view('Ecart.voirecart', compact('data', 'groupeddata', 'ndptotalgen', 'dechqtetotalgen', 'dechpoidstotalgen','ecarttotalgen'));
    }
}
