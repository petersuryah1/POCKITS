<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\joboffer;


class perusahaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['namaPerusahaan', 'lokasiPerusahaan','emailPerusahaan','noTelpPerusahaan','instagram','linkedin'];

    public function joboffer() {
        return $this->hasMany(joboffer::class, 'id');
    }
}
