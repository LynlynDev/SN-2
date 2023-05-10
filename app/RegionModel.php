<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/** 
 * @property int $id
 * @property string $label
 */

class RegionModel extends Model
{
    use HasFactory;
    protected $table = "region_models";
    public $timestamps = false;

    protected $fillable = ["label"];
    // public function participant(){
    //     return $this->hasMany(Participant::class, 'id');
    // }
}
