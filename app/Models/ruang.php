<?php

namespace App\Models;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ruang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Define the relationship to the Inventory model
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
