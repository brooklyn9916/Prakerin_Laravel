<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'inputdata';
    protected $primarykey = 'id';   
    protected $fillable = ['id', 'nama', 'email', 'nik', 'nisn'];
}
