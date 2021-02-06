@extends('public.index')

@section('title', 'Projects')

@section('content')
    <div class="content-title">
      <p class="fs-2 fw-bold">Projects</p> <hr>
      <div class="fs-5 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="title fw-bold">
              {{ $project->name }}
            </div>
            <div class="caption fw-light" style="font-size: 12pt">
              @php
                  $description = App\Models\ProjectDescription::find($project->id);
              @endphp
              @isset($description->description)
                {!! $description->description !!}
              @endisset
            </div>
          </div>
        </div>
      </div>
      <div class="project-list">
        <div class="card-group">
          <div class="card">
            <img src="{{ asset('storage/images/'.$project->img1) }}" class="card-img-top" width="300" height="200" style="{{ empty($project->img1) ? 'display: none' : 'display: block' }}">
          </div>
          <div class="card">
            <img src="{{ asset('storage/images/'.$project->img2) }}" class="card-img-top" width="300" height="200" style="{{ empty($project->img2) ? 'display: none' : 'display: block' }}">
          </div>
        </div>
        <div class="card-group">
          <div class="card">
            <img src="{{ asset('storage/images/'.$project->img3) }}" class="card-img-top" width="300" height="200" style="{{ empty($project->img3) ? 'display: none' : 'display: block' }}">
          </div>
          <div class="card">
            <img src="{{ asset('storage/images/'.$project->img4) }}" class="card-img-top" width="300" height="200" style="{{ empty($project->img4) ? 'display: none' : 'display: block' }}">
          </div>
        </div>
      </div>
    </div>
@endsection