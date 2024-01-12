<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gyerek extends Model
{
    use HasFactory;

    protected $primarykey = 'gyerek_taj';

    protected $fillable = [
        'szulo_id',
        'orvos_id',
        'vez_nev',
        'ker_nev',
        'lakcim_varos',
        'lakszim_irSzam',
        'lakcim_utca',
        'erzekenyseg',
        'szul_datum',
        'szul_hely'
    ];
}
