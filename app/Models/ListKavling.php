<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKavling extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('nama', 'like', '%' . request('search') . '%');
        }
    }
}
