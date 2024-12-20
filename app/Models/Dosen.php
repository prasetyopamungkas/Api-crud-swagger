<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi (mass assignable)
    protected $primaryKey = 'nidn';
    protected $fillable = ['nidn', 'nama', 'tanggal_lahir', 'alamat', 'kode_makul'];

    public function makul()
    {
        return $this->belongsTo(Makul::class, 'kode_makul', 'kode_makul');
    }
}
