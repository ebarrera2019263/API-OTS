<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntiguaGuatemala extends Model
{
    protected $table = 'AntiguaGuatemala';

    protected $fillable = ['ID','post_title', 'sku', 'price','available','time_init','time_end','date_init','date_end','stock','img','categories','id_tienda'];
}
