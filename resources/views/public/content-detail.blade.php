@extends('public.index')

@section('title', 'Projects')

@section('content')
    <div class="content-title">
      <p class="fs-2 fw-bold">Projects</p> <hr>
      <div class="fs-5 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="title fw-bold">
              Sistem informasi manajemen mobil
            </div>
            <div class="caption fw-light" style="font-size: 12pt">
              <ul>
                <li>Membangun bisnis proses sistem dengan bahasa PHP 7</li>
                <li>Menggunakan basisdata SQL</li>
                <li>Merancang tampilan sistem dengan Framework Bootstrap 4</li>
                <li>Mengonversikan kebutuhan client kedalam proses bisnis sistem</li>
                <li class="fw-bold">Pekerjaan skala: Freelancer</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="project-list">
        @for ($i = 0; $i < 2; $i++)
        <div class="card-group">
          <div class="card">
            <img src="https://ravindra21.github.io/simdesa.jpg" class="card-img-top" alt="https://ravindra21.github.io/simdesa.jpg">
          </div>
          <div class="card">
            <img src="https://ravindra21.github.io/simdesa.jpg" class="card-img-top" alt="https://ravindra21.github.io/simdesa.jpg">
          </div>
        </div>
        @endfor
      </div>
    </div>
@endsection