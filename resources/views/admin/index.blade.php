@extends('admin.app')

@section('content')
<div class="container mt-3">
  <div class="card">
    <div class="card-body">
      <p class="fw-bold fs-3">Projects</p>
      <div class="list-group">
        @php
            $projects = App\Models\Project::orderByDesc('created')->get();
        @endphp
        @foreach ($projects as $project)
          <a href="{{ route('admin.project', $project->id) }}" class="list-group-item list-group-item-action">
            {{ $project->name }} <br/>
            <small> {{ date('d/m/Y', strtotime($project->created)) }} &bull; {{ $project->skills }}</small>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection