<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\ProjectDescription;
use Ramsey\Uuid\Uuid;

class AdminController extends Controller
{
    public function index () {
        return view('admin.index');
    }

    public function create () {
        return view('admin.create');
    }

    public function store (Request $request) {
        $image = [];
        
        for ($i=0; $i < 4; $i++) { 
            if (! empty($request->file('photo')[$i])) {
                $imgName = Uuid::uuid4().'.'.$request->file('photo')[$i]->extension();
                Storage::disk('local')->putFileAs('public/images', $request->file('photo')[$i], $imgName);
                $image [] = $imgName;
            } else {
                $image [] = null;
            }
        }

        Project::create([
            'name' => $request->name,
            'skills' => $request->skills,
            'created' => $request->created,
            'type' => $request->type,
            'img1' => $image[0],
            'img2' => $image[1],
            'img3' => $image[2],
            'img4' => $image[3]
        ]);

        $project = Project::latest()->first(); $project_id = $project->id;
        ProjectDescription::create([
            'description' => $request->description,
            'project_id'  => $project_id
        ]);

        return redirect()->back()->withSuccess('Berhasil dokumentasi project');

    }

    public function project ($project_id) {
        $project = Project::find($project_id);
        return view('admin.content-detail', [
            'project' => $project
        ]);
    }

    public function update (Request $request, $project_id) {

        $image = [];
        $project = Project::find($project_id);
        for ($i=0; $i < 4; $i++) { 
            if (! empty($request->file('photo')[$i])) {
                $imgName = Uuid::uuid4().'.'.$request->file('photo')[$i]->extension();
                // storage image to storage
                Storage::disk('local')->putFileAs('public/images', $request->file('photo')[$i], $imgName);
                $image [$i] = $imgName;
                
                Storage::delete('public/images/'.$project->img.$i);
            } else {
                $project->img.($i+1) == null ? 
                    $image [$i] = $project->img.($i+1) : 
                    $image [$i] = null;
                // dsini ada yg awalnya null, ada yg awalnya ada text file.jpg
            }
        }

        Project::find($project_id)->update([
            'name'    => $request->name,
            'skills'  => $request->skills,
            'created' => $request->created,
            'type' => $request->type,
            'img1' => $image[0],
            'img2' => $image[1],
            'img3' => $image[2],
            'img4' => $image[3],
        ]);

        ProjectDescription::find($project_id)->update([
            'description' => $request->description,
        ]);

        return redirect()->route('admin.project', $project_id)->withSuccess('Project updated successfully');

    }

    public function remove_image ($project_id) {
        Project::find($project_id)->update([
            'img1' => null,
            'img2' => null,
            'img3' => null,
            'img4' => null,
        ]);

        return redirect()->route('admin.project', $project_id)->withSuccess('All image removed successfully');
    }

    public function test () {
        Storage::delete('public/images/xx.jpg');
    }
}
