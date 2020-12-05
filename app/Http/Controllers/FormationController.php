<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use App\Models\Formation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class FormationController extends Controller
{

  public function __construct()
  {
    return $this->middleware(['auth:sanctum', 'verified']);
  }

  public function index()
  {
    $formations = Formation::orderBy('startdate', 'DESC')->get();
    return Inertia::render('Formations/Index', compact('formations'));
  }

  public function form($id = null)
  {
    if (intval($id) > 0) {
      $formation = Formation::find($id);
    } else {
      $formation = new Formation();
    }

    return Inertia::render('Formations/Form', compact('formation'));
  }

  public function store(FormationRequest $request)
  {
    if (intval($request->id) > 0) {
      $formation = Formation::find($request->id);
      $formation->update($request->all());
    } else {
      Formation::create($request->all());
    }
    return Redirect::route('formations')->with('success', 'Saved successfully');
  }

  public function delete(Formation $formation)
  {
    $formation->delete();
    return Redirect::route('formations')->with('success', 'Deleted successfully');
  }
  
}
