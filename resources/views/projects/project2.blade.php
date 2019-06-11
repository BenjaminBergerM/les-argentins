@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ asset('images/projects/2/project_background.png') }}") no-repeat center; }
body { overflow-x: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">

</section>
<section class="mt-2 mt-sm-5 container porject-box-1">
    <div class="row">
        <h1 class="col-12 mb-2 mt-1 mt-sm-0 mb-sm-4">Reproquinol for Vetoquinol</h1>
        <article class="col-sm-6">
            <h4>Vetoquinol had a range of products that help in animal reproductive issues, a very large range, complicated and wordy and not particularly as interesting as reproduction itself. They had the vision to create the umbrella brand Reproquinol and asked us to find a way to make this compelling and fun. That was the word: fun. 
                <br><br>
                We always like to approach projects looking for a way to flip the proposition to cut through the clutter. In this case, it was working with what most people believe about animal reproduction: that it is easy, and what we know about human reproduction… it is not </h4>
        </article>
        <article class="col-sm-6">
            <h4>always easy and sometimes we need a little help. We imagined the iconic reproduction machine, the rabbit, needing a little bit of inspiration to get the job done. 
                The result was an ad that not only had great commercial success, but also won industry awards, including a regional Grand Prix. Not bad for a bunny with performance issues!
                <br><br>
                It was such a big hit that we created more ads with other ways the bunny could try to boost his libido or find the right partner for Valentine's Day. As a special end of year gift we even produced a sexy calendar with pin-up bunnies.</h4>
        </article>
    </div>
</section>
<section class="row mt-2 mt-sm-5">
    <article class="col-sm-5">
        <img src="{{ asset('images/projects/2/project_img_1.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/2/project_img_2.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/2/project_img_3.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/2/project_img_4.png') }}" alt="" style="width: 100%">
        <img src="{{ asset('images/projects/2/project_img_5.png') }}" alt="" style="width: 100%">
    </article>
    <article class="col-sm-7">
        <img src="{{ asset('images/projects/2/project_img_6.png') }}" alt="" style="width: 100%">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('images/projects/2/project_img_7.png') }}" alt="" style="width: 100%">
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/projects/2/project_img_8.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </article>
</section>
@endsection

@section('footer')
<footer class="d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center align-items-center p-4">
        <img src="{{ asset('images/logo-black.png') }}" height="80px" alt="" class="mb-3">
        <h6>All right reserved Les Argentins® 2018</h6>
    </div>
</footer>
@endsection