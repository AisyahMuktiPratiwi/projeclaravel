<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primarykey = 'id';
    protected $fillable = ['nama_product', 'detail'];
}
