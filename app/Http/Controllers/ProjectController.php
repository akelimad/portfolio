<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Intervention\Image\ImageManagerStatic as Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth:sanctum', 'verified']);
    }

    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return Inertia::render('Projects/Index', compact('projects'));
    }

    public function form($id = null)
    {
        if (intval($id) > 0) {
            $project = Project::find($id);
        } else {
            $project = new Project();
        }

        return Inertia::render('Projects/Form', compact('project'));
    }

    public function store(ProjectRequest $request)
    {
        $projectRequest = $request->all();
        $tags = isset($projectRequest['tags']) ? explode(',', $projectRequest['tags']) : [];
        $projectRequest['tags'] = json_encode($tags);
        if (intval($request->id) > 0) {
            $project = Project::find($request->id);
            $projectRequest['image'] = $project->image;
            $project->update($projectRequest);
        } else {
            $projectRequest['image'] = "";
            $project = Project::create($projectRequest);
        }
        $filename = $project->image;
        if ($file = $request->hasFile('image')) {
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $save_path = public_path() . '/uploads/projects/' . $project->id . '/';
            $request->image->move($save_path, $filename);
            $project->image = $filename;
            $project->save();
        }
        return Redirect::route('projects')->with('success', 'Saved successfully');
    }

    public function delete(Project $project)
    {
        $project->delete();
        $save_path = public_path() . '/uploads/projects/' . $project->id . '/';
        if (is_dir($save_path)) {
            $filesystem = new Filesystem();
            $filesystem->deleteDirectory($save_path);
        }
        return Redirect::route('projects')->with('success', 'Deleted successfully');
    }
}
