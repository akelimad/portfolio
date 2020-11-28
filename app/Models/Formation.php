<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'description', 'startdate', 'enddate', 'school'];

  public function getStartdateAttribute($value)
  {
    return date('Y-m-d', strtotime($value));
  }

  public function getEnddateAttribute($value)
  {
    return $value != null ? date('Y-m-d', strtotime($value)) : '';
  }

  public function getCreatedAtAttribute($value)
  {
    return date('d/m/Y', strtotime($value));
  }
}
