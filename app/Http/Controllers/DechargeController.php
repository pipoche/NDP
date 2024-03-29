<?php

namespace App\Http\Controllers;

use App\Models\Decharge;
use App\Http\Requests\StoreDechargeRequest;
use App\Http\Requests\UpdateDechargeRequest;
use Illuminate\Http\Client\Request;

class DechargeController extends Controller
{

    public function index()
    {
        $shortdata = Decharge::select('maree', 'bateau', 'totalquantitygen', 'totalpoidsgen', 'dateS', 'dateE')->distinct()->get();

        return view('DECH.index', compact('shortdata'));
    }


    public function store(StoreDechargeRequest $request)
    {

        $array1 = json_decode($request->input('array1'), true);
        $array2 = json_decode($request->input('array2'), true);



        $catQuantityTotals = [];
        foreach ($array1 as $data) {
            $category = $data['category'];
            $quantity = $data['fishquantity'];
            if (!isset($catQuantityTotals[$category])) {
                $catQuantityTotals[$category] = 0;
            }
            $catQuantityTotals[$category] += $quantity;
        }
        $quantitytotalgen = array_sum($catQuantityTotals);

        $catpoidsTotals = [];
        foreach ($array1 as $data) {
            $cat = $data['category'];
            $poids = $data['fishpoids'];
            if (!isset($catpoidsTotals[$cat])) {
                $catpoidsTotals[$cat] = 0;
            }
            $catpoidsTotals[$cat] += $poids;
        }
        $poidstotalgen = array_sum($catpoidsTotals);

        foreach ($array1 as $data) {
            Decharge::create([
                'maree' => $array2[0],
                'bateau' => $array2[1],
                'dateS' => $array2[2],
                'dateE' => $array2[3],
                'categoryname' => $data['category'],
                'fishname' => $data['fishname'],
                'fishquantity' => $data['fishquantity'],
                'fishpoids' => $data['fishpoids'],
                'totalcatquantity' => $catQuantityTotals[$data['category']],
                'totalcatpoids' => $catpoidsTotals[$data['category']],
                'totalquantitygen' => $quantitytotalgen,
                'totalpoidsgen' => $poidstotalgen,

                // Add other columns as needed
            ]);
        }
        return redirect()->route("homedech");
    }

    public function view($maree)
    {




        $data = Decharge::select('maree', 'categoryname', 'fishname', 'fishquantity','fishpoids', 'totalcatpoids', 'totalcatquantity', 'totalpoidsgen', 'totalquantitygen')
            ->where('maree', $maree)
            ->distinct()
            ->get();

        $groupedData = $data->groupBy('categoryname');

        $Dech = Decharge::where('maree', $maree)->get();

        $totalquantitygen = Decharge::where('maree', $maree)->pluck('totalquantitygen')->first();

        $totalpoidsgen = Decharge::where('maree', $maree)->pluck('totalpoidsgen')->first();


        return view('DECH.voirdecharge', compact('Dech', 'groupedData', 'totalquantitygen', 'totalpoidsgen', 'maree'));
    }
}
