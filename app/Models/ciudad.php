<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;
    protected $table = "ciudad";
    protected $primaryKey = "idCiu";
    public $timestamps = false;
}
