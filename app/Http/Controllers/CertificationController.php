<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertificationRequest;
use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CertificationController extends Controller
{
  public function __construct()
  {
    return $this->middleware(['auth:sanctum', 'verified']);
  }

  public function index()
  {
    $certifications = Certification::orderBy('obtention_date', 'DESC')->get();
    return Inertia::render('Certifications/Index', compact('certifications'));
  }

  public function form($id = null)
  {
    if (intval($id) > 0) {
      $certification = Certification::find($id);
    } else {
      $certification = new Certification();
    }

    return Inertia::render('Formations/Form', compact('certification'));
  }

  public function store(CertificationRequest $request)
  {
    if (intval($request->id) > 0) {
      $certification = Certification::find($request->id);
      $certification->update($request->all());
    } else {
      Certification::create($request->all());
    }
    return Redirect::route('certifications')->with('success', 'Saved successfully');
  }

  public function delete(Certification $certification)
  {
    $certification->delete();
    return Redirect::route('certifications')->with('success', 'Deleted successfully');
  }

}
