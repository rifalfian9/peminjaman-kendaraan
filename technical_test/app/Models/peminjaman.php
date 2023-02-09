<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id_peminjaman";
    protected $guarded = ['id_peminjaman'];

    
}
