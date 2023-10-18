@extends('layouts.app')
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold">KTMM</h1>
      <h3 class="fw-normal text-muted mb-3">Karang Taruna Muda Mahardika</h3>
      {{-- <div class="d-flex gap-3 justify-content-center lead fw-normal">
        <a class="icon-link" href="#">
          Learn more
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
        <a class="icon-link" href="#">
          Buy
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div> --}}
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Summer Camp 2023</h2>
                <p class="lead">Summer camp 2023 Program Kerja Divisi Humas</p>
                <div class="bg-dark shadow-sm mx-auto mb-2" style="width: 80%; height: 300px; border-radius: 21px 21px 21px 21px;">
                    <img src="img/summercamp2023.jpeg" style="width: 100%; height: 350px; border-radius: 21px 21px 21px 21px;" alt="">
                </div>
            </div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Minyak Jelantah</h2>
                <p class="lead">Program Kerja Divisi Usaha Ekonomi Produktif</p>
                <div class="bg-dark shadow-sm mx-auto mb-2" style="width: 80%; height: 300px; border-radius: 21px 21px 21px 21px;">
                    <img src="img/jalantah.jpeg" style="width: 100%; height: 350px; border-radius: 21px 21px 21px 21px;" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Futsal Desa Cigugurgirang Compotition 2023</h2>
                <p class="lead">Program Kerja Divisi Minat & Bakat</p>
                <div class="bg-dark shadow-sm mx-auto mb-2" style="width: 80%; height: 300px; border-radius: 21px 21px 21px 21px;">
                    <img src="img/fdcc.jpeg" style="width: 100%; height: 350px; border-radius: 21px 21px 21px 21px;" alt="">
                </div>
            </div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
    </div>
@endsection
