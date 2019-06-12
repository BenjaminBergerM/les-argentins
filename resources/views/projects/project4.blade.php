@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/4/header_img.png') }}") no-repeat center; }
body { overflow-x: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container porject-box-1">
    <div class="row">
        <h1 class="col-12 mb-2 mt-1 mt-sm-0 mb-sm-4">X-Files for Fox Latin America</h1>
        <article class="col-sm-6">
            <h4>X-files is one of the best known series of all times. Even if one never watched an episode it is impossible not to be aware of Mulder, Skully and their inquest into supposed alien contacts. The series returned in 2016 after a 15 year absence and for the 11th season Fox Latin America wanted to make sure viewership was strong.
                <br><br>
                They asked us for an activation idea that would drive social media traffic and interactions with the objective of growing the season premier viewership. It had to be something generic around the series since all specific trailers and previews already existed. We tossed around several options with them, but there was one that stood out. It was based on the question as to what</h4>
        </article>
        <article class="col-sm-6">
            <h4>happens with UFOs after they crash land on earth. Who fixes them? Who even tows them?
                    The idea of a tow truck pulling a crashed UFO all around the city was something we believed would make everyone take out their phones and share. It was!
                    <br><br>
                    We carried out the action simultaneously in Buenos Aires and Mexico City with the help of Gabriel Sagel of Studio Freak who produced and documented the performance during Christmas.
                    For the January 3rd season premier viewership was up 63%.
                    <br><br>
                    Out of this world!</h4>
        </article>
    </div>
</section>
<section class="mt-2 mt-sm-5">
    <video style="width: 100%" poster="{{ asset('images/projects/4/default-video-1.png') }}" controls>
        <source src="{{ asset('videos/projects/4/1ef7f0d5-0c0c-4d7e-aa02-204fe0e1fb0f.mp4') }}" type="video/mp4">
    </video>
</section>
<section class="row mt-2 mt-sm-5">
    <article class="col-sm-6 p-0">
        <img src="{{ asset('images/projects/4/project_img_1.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-6 p-0">
        <img src="{{ asset('images/projects/4/project_img_2.png') }}" alt="" style="width: 100%">
    </article>
</section>
<section class="row mt-2 mt-sm-5">
    <article class="col-sm-4">
        <img src="{{ asset('images/projects/4/project_img_3.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/4/project_img_6.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-4">
        <img src="{{ asset('images/projects/4/project_img_4.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/4/project_img_7.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-4">
        <img src="{{ asset('images/projects/4/project_img_5.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/4/project_img_8.png') }}" alt="" style="width: 100%">
    </article>
</section>

@endsection

@section('footer')
<footer class="d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center align-items-center p-4">
        <img src="{{ asset('images/logo-black.png') }}" height="64px" alt="" class="mb-3">
        <h6>All right reserved Les Argentins® 2018</h6>
    </div>
</footer>
@endsection