<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model {

	protected $table = 'protypes';

	protected $primaryKey = 'type_ID';
	public $timestamps = false;
	public function phone()
    {
        return $this->hasOne('App\Product');
    }

}
?>