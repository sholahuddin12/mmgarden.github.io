<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKavling extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    public $timestamps = false;

    protected $guarded = ['id']; //ga boleh diisi sendiri (selain id boleh di isi sendiri)

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        });
    }
}
