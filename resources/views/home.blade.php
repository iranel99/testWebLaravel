
@extends('layouts.main')
@section('container')

<head>
    <link rel="stylesheet" href="home.css">
</head>
<main>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <div style="background:url(kobo_home.jpg); background-position:center;" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div style="background-color:white; border-radius:20px;" class="col-md-6 p-lg-5 mx-auto my-5">
          <h1  class="display-3 fw-bold">{{ $mb->title }}</h1>
          <h3 class="fw-normal text-muted mb-3">{{ $mb->description }}</h3>
          <div class="d-flex gap-3 justify-content-center lead fw-normal">
            <a class="icon-link" href="https://hololive.hololivepro.com/en/talents/kobo-kanaeru/">
              Pelajari
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
            <a class="icon-link" href="https://sociabuzz.com/kobokanaeru/tribe">
              Dukung
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
          </div>
        </div>
      </div>


<section class="why-us" id="why-us">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SF-_47-oCtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        {{-- <img src="Kobo ngelamak.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> --}}
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">{{ $wu->title }}</h1>
        <p class="lead">{{ $wu->description }}</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="https://youtube.com/@KoboKanaeru">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Youtube</button></a>
        </div>
      </div>
    </div>
</section>

<section class="why-us" id="why-us">
    <div class="b-example-divider"></div>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="{{ asset('storage/posts/'.$posts->image) }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="200" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">{{ $posts->title }}</h1>
          <p class="lead">{!! $posts->content !!}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="https://twitter.com/kobokanaeru">
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Twitter</button></a>
          </div>
        </div>
      </div>
  </section>

<section class="services" id="services">
<div class="b-example-divider"></div>


<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Dislikes</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">{{ $serv->title }}</h2>
        <p class="text-body-secondary">{{ $serv->description }}</p>
        <a href="https://www.youtube.com/live/-BvizyVVhxw?feature=share&t=1339" class="btn btn-primary btn-lg">Sumber Informasi</a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
            @foreach ($serv->services as $serve)
                <div class="col d-flex flex-column gap-2">
                    <h4 style="text-decoration:underline"class="fw-semibold mb-0 text-body-emphasis">{{ $serve->name }}</h4>
                    <p class="text-body-secondary">{{ $serve->description }}</p>
                </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="subscription" id="subscription">
<div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">{{ $subs->title }}</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">{{ $subs->description }}</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="https://youtu.be/ugT2VCTPGSI">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">KOBOLONIMBUS</button></a>
          {{-- <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<div class="b-example-divider"></div>
    </div>
</main>
@endsection
