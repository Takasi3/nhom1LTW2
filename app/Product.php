<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
    public $primaryKey = 'ID';
	public $timestamps = false;

	public function manu()
    {
        return $this->belongsTo('App\Manufacture', 'manu_ID');
    }

    public function protype()
    {
        return $this->belongsTo('App\Protype', 'type_ID');
    }
}

?>