<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
  public function index()
  {
    $formations = Formation::orderBy('startdate', 'DESC')->get();
    return Inertia::render('Home', compact('formations'));
  }
}
