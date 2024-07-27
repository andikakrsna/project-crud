<?php

namespace App\Models;

use App\Models\ruang;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Define the relationship to the Produk model
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    // Define the relationship to the Ruang model
    public function ruang()
    {
        return $this->belongsTo(ruang::class);
    }
}
