<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company','city', 'startdate', 'enddate', 'description'];

    public function getStartdateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }
}
