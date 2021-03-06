<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SkillController extends Controller
{
  public function __construct()
  {
    return $this->middleware(['auth:sanctum', 'verified']);
  }

  public function index()
  {
    return Inertia::render('Skills/Index', []);
  }
}
