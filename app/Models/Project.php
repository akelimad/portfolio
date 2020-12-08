<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'link', 'realized_at', 'tags'];

    public function getTagsAttribute($value) {
        $items = json_decode($value);
        return !empty($items) ? $items : [];
    }
}