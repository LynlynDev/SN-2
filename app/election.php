<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class election extends Model
{
    use HasFactory;
    protected $table = 'election';
	public $timestamps = false;

	protected $fillable = [ 'date', 'statut', 'label', 'description' ];

	// public function votes()
	// {
	// 	return $this->hasMany(vote::class, 'idelection');
	// }
}
