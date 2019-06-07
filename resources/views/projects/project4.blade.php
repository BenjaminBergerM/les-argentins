@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/4/project_1.png') }}") no-repeat center; }
.body { overflow: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container">
    <div class="row">
        <h1 class="col-12 mb-4">X-Files for Fox Latin America</h1>
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
    <video style="width: 100%" controls>
        <source src="{{ asset('videos/projects/1/02_VATTENFALL_30S_V2_Wip1.mp4') }}" type="video/mp4">
    </video>
</section>
<section class="row mt-2 mt-sm-5">
    <article class="col-sm-6">
        <video style="width: 100%" controls>
            <source src="{{ asset('videos/projects/1/03_VATTENFALL_10S_BLE_Wip1.mp4') }}" type="video/mp4">
        </video>
    </article>
    <article class="col-sm-6">
        <video style="width: 100%" controls>
            <source src="{{ asset('videos/projects/1/04_VATTENFALL_10S_CRU2.mp4') }}" type="video/mp4">
        </video>
    </article>
</section>
<section class="mt-2 mt-sm-5">
    <video style="width: 100%" controls>
        <source src="{{ asset('videos/projects/1/05_VATTENFALL_20S_DIGITAL_CHEVEUX_Wip1.mp4') }}" type="video/mp4">
    </video>
</section>

@endsection

@section('footer')
    {{-- <footer class="d-inline-flex flex-column justify-content-center">
        <img src="{{ asset('images/logo.png') }}" alt="">
        <h6>All right reserved Les Argentins® 2018</h6>
    </footer> --}}
@endsection