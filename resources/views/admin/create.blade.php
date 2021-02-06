@extends('admin.app')

@section('content')
<div class="container mt-3 mb-3">
  @include('admin.msg')
  <div class="card col-12">
    <div class="card-body">
      <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data" id="createFrm">
      <p class="fw-bold fs-3">Save Project</p>
      <div class="row">
        <div class="col-6">
          <div>
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label"> Project name </label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-3">
                <label for="created" class="form-label"> Tgl Pembuatan </label>
                <input type="date" class="form-control" id="created" name="created">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label"> Tipe pekerjaan </label>
                <input type="text" class="form-control" id="type" name="type">
                <small class="text-muted">Freelance, Magang, Part-Time</small>
              </div>
              <div class="mb-3">
                <label for="skill" class="form-label"> Keahlian</label>
                <input type="text" class="form-control" id="skills" name="skills">
                <small class="text-muted">Laravel, Javascript, PHP, SQL, Bootstrap</small>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label"> Deskripsi </label>
                <textarea class="form-control" id="mytextarea" rows="8" name="description"></textarea>   
              </div>
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload gambar project</label>
            <img id="output1" height="200" width="300" class="mb-3" style="display: none"/>
            <input class="form-control" type="file" name="photo[0]" onchange="loadFile1(event)">
          </div>
          <div class="mb-3">
            <img id="output2" height="200" width="300" class="mb-3" style="display: none"/>
            <input class="form-control" type="file" name="photo[1]" onchange="loadFile2(event)">
          </div>
          <div class="mb-3">
            <img id="output3" height="200" width="300" class="mb-3" style="display: none"/>
            <input class="form-control" type="file" name="photo[2]" onchange="loadFile3(event)">
          </div>
          <div class="mb-3">
            <img id="output4" height="200" width="300" class="mb-3" style="display: none"/>
            <input class="form-control" type="file" name="photo[3]" onchange="loadFile4(event)">
          </div>
        </div>
      </div>
    </form>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end card-footer">
      <button type="submit" class="btn btn-primary" form="createFrm">Save Project</button>
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