<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ndp extends Model
{
    use HasFactory;

    protected $fillable = [
        'maree',
        'bateau',
        'dateS',
        'dateE',
        'categoryname',
        'fishname',
        'fishquantity',
        'totalcategory',
        'totalgen',
    ];

}
