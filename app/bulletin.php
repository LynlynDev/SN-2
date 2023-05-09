<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulletin extends Model
{
    use HasFactory;

    protected $table = 'bulletin';
	public $timestamps = false;

	protected $fillable = [
		'couleur',
		'photo'
	];

	public function vote()
	{
		return $this->hasMany(vote::class, 'id_bulletin');
	}
}
