<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'course_id',
        'judul',
        'deskripsi',
        'materi',
    ];

    public function lessons() {
        return $this->belongsTo(Lesson::class);
    }
}