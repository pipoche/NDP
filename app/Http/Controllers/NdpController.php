<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Models\Ndp;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class NdpController extends Controller
{
    public function index()
    {
        $shortdata = Ndp::select('maree', 'bateau', 'dateS', 'dateE', 'totalgen')->distinct()->get();


        return view('NDP.index', compact('shortdata'));
    }


    public function store(Request $request)
    {
        $array1 = json_decode($request->input('array1'), true);
        $array2 = json_decode($request->input('array2'), true);
        $categoryTotals = [];
        foreach ($array1 as $data) {
            $category = $data['category'];
            $quantity = $data['fishquantity'];
            if (!isset($categoryTotals[$category])) {
                $categoryTotals[$category] = 0;
            }
            $categoryTotals[$category] += $quantity;
        }
        $totalgen = array_sum($categoryTotals);
        foreach ($array1 as $data) {
            Ndp::create([
                'maree' => $array2[0],
                'bateau' => $array2[1],
                'dateS' => $array2[2],
                'dateE' => $array2[3],
                'categoryname' => $data['category'],
                'fishname' => $data['fishname'],
                'fishquantity' => $data['fishquantity'],
                'totalcategory' => $categoryTotals[$data['category']],
                'totalgen' => $totalgen,
            ]);
        }
        return redirect()->route("homendp");
    }

    public function view($maree)
    {



        $data = Ndp::select('maree', 'categoryname', 'fishname', 'fishquantity', 'totalcategory', 'totalgen')
            ->where('maree', $maree)
            ->distinct()
            ->get();

        $groupedData = $data->groupBy('categoryname');

        $ndps = Ndp::where('maree', $maree)->get();

        $totalgen = Ndp::where('maree', $maree)->pluck('totalgen')->first();


        return view('NDP.voirndp', compact('ndps', 'groupedData', 'totalgen', 'maree'));
    }

    public function generatepdf($maree)
    {
        $ndp = Ndp::select('maree', 'categoryname', 'fishname', 'fishquantity', 'totalcategory', 'totalgen')
        ->where('maree', $maree)
        ->distinct()
        ->get();
        

        $groupedData = $ndp->groupBy('categoryname');
        $totalgen = Ndp::where('maree', $maree)->pluck('totalgen')->first();
        $bateau = Ndp::where('maree', $maree)->pluck('bateau')->first();
        $dateS = Ndp::where('maree', $maree)->pluck('dateS')->first();
        $dateE = Ndp::where('maree', $maree)->pluck('dateE')->first();

        $data = [
            'maree' => $maree,
            'groupedData' => $groupedData,
            'totalgen'=> $totalgen,
            'bateau' => $bateau,
            'dateS'=> $dateS, 
            'dateE' => $dateE 

        ];

        $pdf =  Pdf::loadView('NDP.generatendppdf', $data);
        return $pdf->download('NDP'.time().'.pdf');
    }


   
}
