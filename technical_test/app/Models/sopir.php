<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sopir extends Model
{
    protected $table = "sopirs";
    protected $primaryKey = "id_sopir";
    protected $guarded = ['id_sopir'];
}
