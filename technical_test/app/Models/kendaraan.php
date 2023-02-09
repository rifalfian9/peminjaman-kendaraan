<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table = "kendaraans";
    protected $primaryKey = "id_kendaraan";
    protected $guarded = ['id_kendaraan'];
}
