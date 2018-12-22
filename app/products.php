<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table   = "products";
    public $primaryKey = 'ID';
    public $timestamps = false;
    public function protypes()
    {
        return $this->belongsTo('App\protypes', 'type_ID');
    }
    public function manu()
    {
        return $this->belongsTo('App\Manufacture', 'manu_ID');
    }
}
