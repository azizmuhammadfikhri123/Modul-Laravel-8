<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;
class produk extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','upadated_at'];

    public function kategori()
    {
        return $this->hasOne(kategori::class, 'id', 'id_kategori');
    }

}
