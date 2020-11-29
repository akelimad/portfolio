<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ExperienceController extends Controller
{
  public function __construct()
  {
    return $this->middleware(['auth:sanctum', 'verified']);
  }

  public function index()
  {
    $experiences = Experience::orderBy('startdate', 'DESC')->get();
    return Inertia::render('Experiences/Index', compact('experiences'));
  }

  public function form($id = null)
  {
    if (intval($id) > 0) {
      $experience = Experience::find($id);
    } else {
      $experience = new Experience();
    }

    return Inertia::render('Experiences/Form', compact('experience'));
  }

  public function store(ExperienceRequest $request)
  {
    if (intval($request->id) > 0) {
      $experience = Experience::find($request->id);
      $experience->update($request->all());
    } else {
      Experience::create($request->all());
    }
    return Redirect::route('experiences')->with('success', 'Saved successfully');
  }

  public function delete(Experience $experience)
  {
    $experience->delete();
    return Redirect::route('experiences')->with('success', 'Deleted successfully');
  }

}
