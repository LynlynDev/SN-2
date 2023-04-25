<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;
    protected $table = "participant";
    protected $fillable = ['cni', 'nom', 'sexe', 'status', 'email', 'etat', 'tel'];
    public $timestamps = false;

}
