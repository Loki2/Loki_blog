<?php


namespace App\admin_model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function products()
    {
        return $this->belongsTo('App\admin_modle\category');
    }
}
