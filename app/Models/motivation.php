<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivation extends Model
{
    use HasFactory;
    protected $table = "motivation";
    public $timestamps = true;
    protected $var = [
		'id_motivation' => 'int',
    ];

    protected $fillable = ['id_motivation','intitulé', 'id_abonne'];
}
