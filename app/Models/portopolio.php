<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portopolio extends Model
{
    use HasFactory;
    protected $table = "portopolios";
    // protected $primary Key = "nis";
    protected $guarded = [''];
    protected $keyType = "string";
}
