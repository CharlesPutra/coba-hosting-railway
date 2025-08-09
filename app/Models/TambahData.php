<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahData extends Model
{
    use HasFactory;
    protected $table = 'tambah_data';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];
}
