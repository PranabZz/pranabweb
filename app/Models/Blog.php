<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'thumbnail',
        'preview'
    ];

    public function thumbnailUrl() {
        return $this->thumbnail ? 
            Storage::disk('thumbnails')->url($this->thumbnail)
            : 
            "";
    }

    public function date() {
        return $this->created_at->format('Y M d') ;
    }
}
