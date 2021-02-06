@extends('public.index')

@section('title', 'Home')

@section('content')
    <div class="content-title">
      <p class="fs-2 fw-bold">Projects</p> <hr>
      <div class="portfolio ps-4">
        @php
          $projects = App\Models\Project::orderByDesc('created')->get();
        @endphp
        @foreach ($projects as $project)
          <div class="list mb-4">
            <div class="title fs-5 fw-bold ">
              <a href="{{ route('detail', $project->id) }}" class="text-decoration-none">
                {{ $project->name }}
              </a>
            </div>
              <div>
                {{ $project->skills }}
                {{-- <span class="badge bg-laravel">Laravel</span>
                <span class="badge bg-bootstrap">Bootstrap</span>
                <span class="badge bg-mysql">SQL</span> --}}
              </div>
              <span class="created text-muted" style="margin-top: -10px; font-size:10pt">Created {{ date('d M Y', strtotime($project->created))}} </span>
          </div>
        @endforeach
      </div>
    </div>
@endsection