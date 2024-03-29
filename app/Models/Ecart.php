<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecart extends Model
{
    use HasFactory;

    protected $fillable = [
        'maree',
        'bateau',
        'dateE',
        'dateS',
        'fishname',
        'categoryname',
        'ndpfishquantity',
        'ndpcatquantitytotal',
        'ndptotalgen',
        'dechQte',
        'dechpoids' ,
        'dechcatpoidstotal',
        'dechcatQtetotal' ,
        'dechqtetotalgen',
        'dechpoidstotalgen',
        'ecartvalue',
        'ecartcattotal',
        'ecarttotalgen'
    ];
}
