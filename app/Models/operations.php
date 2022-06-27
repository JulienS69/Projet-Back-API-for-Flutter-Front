<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operations extends Model
{
    protected $fillable = [
        'Id_Op',
        'Type',
        'DateOp',
        'Montant',
        'Id_Compte'
    ];
    use HasFactory;
}
