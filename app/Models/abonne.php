<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonne extends Model
{
    use HasFactory;
    protected $table = "abonne";
    public $timestamps = false;
    protected $var = [
        'age' => 'int',
		'id_abonne' => 'int',
    ];

    protected $fillable = ['nom', 'prenom', 'age', 'sexe', 
     'rue', 'codePostal', 'ville', 'pays', 'tel', 'email'];
    

   
}

