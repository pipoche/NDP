<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decharge extends Model
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
        'fishpoids',
        'totalcatpoids',
        'totalcatquantity',
        'totalquantitygen',
        'totalpoidsgen',
    ];
}
