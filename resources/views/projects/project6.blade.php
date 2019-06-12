@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/6/header_img.png') }}") no-repeat center; }
body { overflow-x: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container porject-box-1">
    <div class="row">
        <h1 class="col-12 mb-2 mt-1 mt-sm-0 mb-sm-4">Samsung for Cheil</h1>
        <article class="col-sm-6">
            <h4>Technology is a complicated category in which to stand out.
                    Sometimes your product has a breakthrough and can be presented as something totally different and other times the innovation is incremental or hidden under the covers and much less evident. <br><br>
                    
                    When we received the brief from Cheil there was an international campaign concept which was “Designed for infinite possibilities” and a desire to position the technology as a tool for artists. The top product attributes that enabled these infinite possibilities </h4>
        </article>
        <article class="col-sm-6">
            <h4>were predictive text and the stylus interface. We explored both by imagining how we could enlarge these seemingly mundane benefits into something larger than life. <br><br>

                    In the end we decided to create a wall of phones (400 in total) and use them as a canvas for a street artist: Mambo. It was not an easy feat, but with the help of Juan Mathé and Wally Wallingre of WTF/Chicle we were able to pull it off. Mambo even created an app based on the artwork: an infinite digital work of art that can be explored by moving around and zooming in and out.</h4>
        </article>
    </div>
</section>
<section class="mt-2 mt-sm-5">
    <video style="width: 100%" poster="{{ asset('images/projects/6/default-video-1.png') }}" controls>
        <source src="{{ asset('videos/projects/6/Samsung_Mambo_Viral.mp4') }}" type="video/mp4">
    </video>
</section>
<section class="row mt-2 mt-sm-5 px-5">
    <article class="col-sm-3 p-1">
        <img src="{{ asset('images/projects/6/project_img_1.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-3 p-1">
        <img src="{{ asset('images/projects/6/project_img_2.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-3 p-1">
        <img src="{{ asset('images/projects/6/project_img_3.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-3 p-1">
        <img src="{{ asset('images/projects/6/project_img_4.png') }}" alt="" style="width: 100%">
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