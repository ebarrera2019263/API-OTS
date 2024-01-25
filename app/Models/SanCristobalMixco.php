<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanCristobalMixco extends Model
{
    protected $table = 'SanCristobalMixco';

    protected $fillable = ['ID','post_title', 'sku', 'price','available','time_init','time_end','date_init','date_end','stock','img','categories','id_tienda'];
}
