<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Ini wajib agar Product::create() bisa dipakai
    protected $fillable = ['nama', 'harga', 'stok'];
}
