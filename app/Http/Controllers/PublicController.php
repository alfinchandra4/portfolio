<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index() {
        return view('public.content');
    }

    public function project ($project_id) {
        $project = Project::find($project_id);
        return view('public.content-detail', [
            'project' => $project
        ]);
    }

    public function profile () {
        return view('public.profile');
    }
}
