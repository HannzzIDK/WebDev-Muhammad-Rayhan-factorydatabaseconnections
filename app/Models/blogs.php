<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class blogs extends Model
{
    use hasFactory;
    protected $fillable = [
        'thumbnail',
        'title',
        'content',
    ];

    public function about(): hasOne{
        return $this->hasOne(about::class, 'blog_id');
    }
}