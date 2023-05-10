<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    use HasFactory;
    protected $table = 'vote';
	public $timestamps = false;

	protected $casts = [
		'idbulletin' => 'int',
		'idelection' => 'int',
		'id_participant' => 'int'
	];

	protected $fillable = [
		'date',
		'identite',
		'idbulletin',
		'id_participant'
	];

	public function bulletin()
	{
		return $this->belongsTo(bulletin::class, 'idbulletin');
	}

	public function election()
	{
		return $this->belongsTo(election::class, 'idelection');
	}

	public function participant()
	{
		return $this->belongsTo(participant::class, 'id_participant');
	}
}
