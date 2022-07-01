<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'Id_op',
        'Type',
        'DateOp',
        'Montant',
        'Id_Cpt'
    ];
    use HasFactory;
}
