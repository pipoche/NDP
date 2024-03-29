<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;
    protected $fillable = [
        'numexport' ,
        'numdum',
        'destination',
        'pays',
        'ville',
        'transport',
        'devise',
        'facturecode',
        'maree',
        'decharge',
        'poids',
        'montant',
        'totalpoids',
        'totalmontant',
    ];
}
