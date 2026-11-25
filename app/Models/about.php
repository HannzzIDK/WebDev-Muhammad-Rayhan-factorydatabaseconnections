<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use hasFactory;
    protected $fillable = [
        'thumbnail',
        'nama',
        'jurusan',
        'institusi',
        'email',
    ];
    public function blog(){
        return $this->belongsTo(blogs::class, 'blog_id');
    }
}
