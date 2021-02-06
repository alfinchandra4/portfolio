@extends('admin.app')

@section('content')
<div class="container mt-3 mb-3">
  @include('admin.msg')
  <div class="card col-md-12">
    <div class="card-body">
      <form action="{{ route('admin.update', $project->id) }}" 
            enctype="multipart/form-data" 
            id="updFrm" method="POST">
            @method('PUT')
      <p class="fw-bold fs-3">Edit Project</p>
      <div class="row">
        <div class="col-md-6">
          <div>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label"> Project name </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
              </div>
              <div class="mb-3">
                <label for="created" class="form-label"> Tgl Pembuatan </label>
                <input type="date" class="form-control" id="created" name="created" value="{{ $project->created }}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label"> Tipe pekerjaan </label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $project->type }}">
                <small class="text-muted">Freelance, Magang, Part-Time</small>
              </div>
              <div class="mb-3">
                <label for="skill" class="form-label"> Keahlian</label>
                <input type="text" class="form-control" id="skills" name="skills" value="{{ $project->skills }}">
                <small class="text-muted">Laravel, Javascript, PHP, SQL, Bootstrap</small>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label"> Deskripsi </label>
                <textarea class="form-control" id="mytextarea" rows="8" name="description">@if ($project->description != null){!! $project->description->description !!}@endif</textarea>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload gambar project</label><br/>
            <img id="output1" height="200" width="300" class="mb-3" style="{{ empty($project->img1) ? 'display: none' : 'display: block' }}" src="{{ asset('storage/images/'.$project->img1) }}"/>
            <input class="form-control" type="file" name="photo[0]" onchange="loadFile1(event)">
          </div>
          <div class="mb-3">
            <img id="output2" height="200" width="300" class="mb-3" style="{{ empty($project->img2) ? 'display: none' : 'display: block' }}" src="{{ asset('storage/images/'.$project->img2) }}"/>
            <input class="form-control" type="file" name="photo[1]" onchange="loadFile2(event)">
          </div>
          <div class="mb-3">
            <img id="output3" height="200" width="300" class="mb-3" style="{{ empty($project->img3) ? 'display: none' : 'display: block' }}" src="{{ asset('storage/images/'.$project->img3) }}"/>
            <input class="form-control" type="file" name="photo[2]" onchange="loadFile3(event)">
          </div>
          <div class="mb-3">
            <img id="output4" height="200" width="300" class="mb-3" style="{{ empty($project->img4) ? 'display: none' : 'display: block' }}" src="{{ asset('storage/images/'.$project->img4) }}"/>
            <input class="form-control" type="file" name="photo[3]" onchange="loadFile4(event)">
          </div>
        </div>
      </div>
    </form>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end card-footer">
      <a href="{{ route('admin.remove_image', $project->id) }}" class="btn btn-outline-secondary">Reset gambar</a>
      <button type="submit" class="btn btn-primary" form="updFrm">Update Project</button>
    </div>
  </div>
</div>

<script>
  var loadFile1 = function(event) {
    var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      output.value = null;
    }
  };
  var loadFile2 = function(event) {
    var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      output.value = null;
    }
  };
  var loadFile3 = function(event) {
    var output = document.getElementById('output3');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      output.value = null;
    }
  };
  var loadFile4 = function(event) {
    var output = document.getElementById('output4');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      output.value = null;
    }
  };
</script>
@endsection