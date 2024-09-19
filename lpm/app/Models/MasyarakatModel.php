<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasyarakatModel extends Model
{
    use HasFactory;
    
    protected $table = 'masyarakat'; // Nama tabel di database
    protected $primaryKey = 'id';    // Primary Key

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama', 'nik', 'nokk', 'fotoktp', 'fotokk', 
        'umur', 'jenis_kelamin', 'provinsi', 'kab_kota', 
        'kecamatan', 'kelurahan_desa', 'alamat', 'rt', 'rw',
        'penghasilan_sebpandemi', 'penghasilan_sudpandemi', 'alasan'
    ];
}
