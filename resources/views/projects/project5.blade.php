@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/3/project_1.png') }}") no-repeat center; }
.body { overflow: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container">
    <div class="row">
        <h1 class="col-12 mb-4">Binner 2015 Campaign</h1>
        <article class="col-sm-6">
            <h4>Political campaigns have little to do with traditional advertising in the same way politics has little to do with marketing. So it is very interesting to switch modes from one to another. <br><br>

                    For The Binner 2015 presidential campaign in Argentina we had the good fortune of working with seasoned political advisors and top research companies to identify the key strategy points of the campaign and shape the form of the discourse. We wanted people to be able to get to know the candidate even though they had no real access and to understand why socialism was the right choice for the country at the time</h4>
        </article>
        <article class="col-sm-6">
            <h4>Hermes Binner, President of the Socialist Party and former Governor was first and foremost a medical doctor, so we used this as part of our language, both verbal and visual, to make a parallel between the state of the country and a patient needing treatment.
                <br><br>
                Unfortunately, Mr. Binner decided to step down from his nomination and we could not execute the final part of the campaign.</h4>
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