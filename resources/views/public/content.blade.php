@extends('public.index')

@section('title', 'Home')

@section('content')
    <div class="content-title">
      <p class="fs-2 fw-bold">Projects</p> <hr>
      <div class="portfolio ps-4">
        @for ($i = 0; $i < 10; $i++)
        <div class="list mb-4">
          <div class="title fs-5 fw-bold ">
            <a href="{{ route('project.detail') }}" class="text-decoration-none">
              Sistem Pendaftaran Skripsi dan Tugas Akhir
            </a>
          </div>
            <div>
              <span class="badge bg-laravel">Laravel</span>
              <span class="badge bg-bootstrap">Bootstrap</span>
              <span class="badge bg-mysql">SQL</span>
            </div>
            <span class="created text-muted" style="margin-top: -10px; font-size:10pt">Created 17 Jan 2020 </span>
        </div>
        @endfor
      </div>
    </div>
@endsection