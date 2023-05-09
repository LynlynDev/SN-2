<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;
    protected $table = "participant";
    public $timestamps = false;
    protected $var = [
        'age' => 'int',
		'id_region' => 'int',
		'etat' => 'boolean'
    ];

    protected $fillable = ['cni', 'nom', 'sexe', 'email', 'etat', 'tel', 'id_region', 'age'];
    

    public function region_Model()
	{
		return $this->belongsTo(RegionModel::class, 'id');
	}

	public function vote() 
	{
		return $this->hasMany(vote::class, 'id_participant');
	}
}
