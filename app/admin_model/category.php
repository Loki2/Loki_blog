<?php

namespace App\admin_model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable =['cat_id','cat_name','cat_desc','publication_status'];

    public function products()
    {
        return $this->hasMany('App\admin_modle\product');
    }
}

