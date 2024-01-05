<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chimaltenango extends Model
{
    protected $table = 'Chimaltenango';
    
    protected $fillable = ['post_title', 'sku', 'price','available','time_init','time_end','date_init','date_end','stock','img','categories','id_tienda'];
}
