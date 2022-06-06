<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\perusahaan;

class joboffer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['tanggalPenerimaan','tanggalPenutupan','jumlahLowongan','deskripsi','kategori','gambarProfilPerusahaan','namajoboffer','idPerusahaan'];

    public function perusahaan() {
        return $this->belongsTo(perusahaan::class, 'id');

    }
}
