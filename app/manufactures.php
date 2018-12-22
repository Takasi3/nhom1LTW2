<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class manufactures extends Model
{
    protected $table      = "manufactures";
    protected $primaryKey = 'manu_ID';
    public $timestamps    = false;
    public function phone()
    {
        return $this->hasOne('App\Product');
    }
    //

}
