@extends('public.index')

@section('title', 'About Me')

@section('content')
    <div class="content-title">
      <p class="fs-2 fw-bold">About Me</p> <hr>
      <div class="profile ps-4">
        <div class="education">
          <p class="fw-bold fs-2">Education</p>
          <div class="card">
            <div class="card-body">
              <div class="fw-bold">Universitas Pembangunan Nasional "Veteran" Jakarta</div>
              <div class="fw-light">S1 Sistem Informasi &#183; Juli 2019 &#183; IPK 3.87</div>
            </div>
          </div>
        </div>
        <div class="contact fw-light mt-3">
          <p class="fw-bold fs-2">Contact</p>
          <ul>
            <li>Email: <a href="mailto:alfinchandra.work@gmail.com">alfinchandra.work@gmail.com</a>  </li>
            <li>Phone: <a href="tel:+6281289180030">6281289180030</a></li>
            <li>Region: Tangerang, Banten. ID</li>
            <li>Medium: <a href="https://alfinchandra4.medium.com/">https://alfinchandra4.medium.com/</a></li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/alfinchandra/">https://www.linkedin.com/in/alfinchandra/</a></li>
          </ul>
        </div>
      </div>
    </div>
@endsection