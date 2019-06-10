@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/1/project_1.png') }}") no-repeat center; }
body { overflow-x: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container porject-box-1">
    <div class="row">
        <h1 class="col-12 mb-2 mt-1 mt-sm-0 mb-sm-4">Vattenfall for Scenarii</h1>
        <article class="col-sm-6">
            <h4>We received a call one day from Caroline Escande,
                the brilliant planner at a Scenarii, a PR agency in
                Paris. Would we would be interested in pitching for
                the French launch of Vattenfall, Sweden’s leading
                energy company? <br> <br>
                We pitched, we won and we produced a campaign
                we love with Didier Barcelo of Henry thanks to a
                great client: Olivier Antsett.</h4>
        </article>
        <article class="col-sm-6">
            <h4>We received a call one day from Caroline Escande,
                the brilliant planner at a Scenarii, a PR agency in
                Paris. Would we would be interested in pitching for
                the French launch of Vattenfall, Sweden’s leading
                energy company? <br> <br>
                We pitched, we won and we produced a campaign
                we love with Didier Barcelo of Henry thanks to a
                great client: Olivier Antsett.</h4>
        </article>
    </div>
</section>
<section class="mt-2 mt-sm-5">
    <video style="width: 100%" poster="{{ asset('images/projects/1/default-video-1.png') }}" controls>
        <source src="{{ asset('videos/projects/1/02_VATTENFALL_30S_V2_Wip1.mp4') }}" type="video/mp4">
    </video>
</section>
<section class="row mt-2 mt-sm-5">
    <article class="col-sm-6">
        <video style="width: 100%" poster="{{ asset('images/projects/1/default-video-2.png') }}" controls>
            <source src="{{ asset('videos/projects/1/04_VATTENFALL_10S_CRU2.mp4') }}" type="video/mp4">
        </video>
    </article>
    <article class="col-sm-6">
        <video style="width: 100%" poster="{{ asset('images/projects/1/default-video-3.png') }}" controls>
            <source src="{{ asset('videos/projects/1/05_VATTENFALL_20S_DIGITAL_CHEVEUX_Wip1.mp4') }}" type="video/mp4">
        </video>
            
    </article>
</section>
<section class="mt-2 mt-sm-5">
    <video style="width: 100%" poster="{{ asset('images/projects/1/default-video-4.png') }}" controls>
        <source src="{{ asset('videos/projects/1/03_VATTENFALL_10S_BLE_Wip1.mp4') }}" type="video/mp4">
    </video>
</section>

@endsection

@section('footer')
    {{-- <footer class="d-flex flex-column justify-content-center align-items-center">
        <hr>
        <hr>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <h6>All right reserved Les Argentins® 2018</h6>
        </div>
    </footer> --}}
@endsection