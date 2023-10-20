<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $fillable = [
        'kodeKategori',
        'namaKategori',
        'deskripsi',
    ];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
