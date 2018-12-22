<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class protypes extends Model
{
    protected $table      = "protypes";
    protected $primaryKey = 'type_ID';
    public $timestamps    = false;
    //
    public function products()
    {
        return $this->hasMany('App\products');
    }
    public function phone()
    {
        return $this->hasOne('App\Product');
    }
}
