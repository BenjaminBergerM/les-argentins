@extends('layouts.app')

@section('css')
<style>
    .hero { background: url("{{ asset('images/home/background.gif') }}") no-repeat center; }
    .about-us { background: url("{{ asset('images/home/background_2.png') }}") no-repeat center; }
    .creativity { background: url("{{ asset('images/home/background_3.png') }}") no-repeat center; }
    
    .project-1 { background: url("{{ asset('images/projects/1/img_1.png') }}") no-repeat center; }
    .project-2 { background: url("{{ asset('images/projects/1/img_2.png') }}") no-repeat center; }
    .project-3 { background: url("{{ asset('images/projects/1/img_3.png') }}") no-repeat center; }
    .project-4 { background: url("{{ asset('images/projects/1/img_4.png') }}") no-repeat center; }
    .project-5 { background: url("{{ asset('images/projects/1/img_5.png') }}") no-repeat center; }
    .project-6 { background: url("{{ asset('images/projects/1/img_6.png') }}") no-repeat center; }
    .project-7 { background: url("{{ asset('images/projects/1/img_7.png') }}") no-repeat center; }
    
    .founders { background: url("{{ asset('images/home/founders.png') }}") no-repeat center; }
    .contact { background: url("{{ asset('images/home/mapa.png') }}") no-repeat center; }
    
    @media only screen and (max-width: 576px) {
        .hero { background: url("{{ asset('images/home/background_phone.gif') }}") no-repeat center; }
        .about-us { background: url("{{ asset('images/home/background_2_phone.png') }}") no-repeat center; }
        .creativity { background: url("{{ asset('images/home/background_3_phone.png') }}") no-repeat center; }
        .contact { background: white; }
    }

</style>   
@endsection

@section('content')
    <section class="hero d-flex flex-comlumn align-items-end justify-content-center" id="hero">
        <a href="#about-us" class="d-inline-flex flex-column align-items-center">
            <img src="{{ asset('images/icons/down.png') }}" alt="" width="16px" height="33px">
            <p class="text-white mt-1" style="font-size: 10px;">You know what to do</p>
        </a>
    </section>
    <section id="about-us" class="about-us d-flex flex-comlumn align-items-end pb-2">
        <div class="container pb-5 text-center text-sm-left">
            <h3 class="text-white mb-2 col-sm-5"><strong>Lots has changed since
                we started 10 years ago:</strong></h3>
            <p class="text-white col-sm-5">Social media is now the <strong>biggest media</strong>, consultants are
                becoming agency holdings and data the big star.
                So after ten years as the ad agency that works for ad
                agencies, <strong>we think it’s time for a change.</strong></p>
        </div>
    </section>
    <section class="creativity d-flex flex-comlumn align-items-end justify-content-center" id="creativity">
        <a href="#project-1" class="d-inline-flex flex-column align-items-center">
            <img src="{{ asset('images/icons/scroll.png') }}" height="22px">
            <p class="text-black mt-1" style="font-size: 10px;">Scroll</p>
        </a>
    </section>
    <section id="project-1">

        <article class="project project-1 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For PR agencies</strong> that get asked to launch a big player in the energy market</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('1')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject1" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(1)">&times;</a>
                    <div class="content">
                        <h5><strong>Vattenfall for Scenarii</strong><h5>
                        <p class="mt-4">We received a call one day from Caroline Escande,
                        the brilliant planner at a Scenarii, a PR agency in
                        Paris. Would we would be interested in pitching for
                        the French launch of Vattenfall, Sweden’s leading
                        energy company?
                        We pitched, we won and we produced a campaign
                        we love with Didier Barcelo of Henry thanks to a
                        great client: Olivier Antsett.</p>
                        <img class="mt-3" src="{{ asset('images/projects/1/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>

    </section>
    <section class="founders d-flex flex-row align-items-center" id="founders">
        <div class="container">
            {{-- <article>
                <img src="{{ asset('images/home/founders/founder_1.png') }}" alt="">
            </article>
            <article>
                <img src="{{ asset('images/home/founders/founder_2.png') }}" alt="">
            </article> --}}
        </div>
    </section>
    <section class="contact pt-5" id="contact">
        <div class="container pt-5 pt-sm-4">
            <h3 class="mb-5">Contacts</h3>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/blue-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>Europe, Middle East & Africa</strong></h5>
                    <h6>Vincent Doye</h6>
                    <h6><a class="text-black" href="mailto:vincent@lesargentins.com">vincent@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+33 6 83 69 84 36">+33 6 83 69 84 36</a></h6>
                </div>
            </article>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/yellow-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>North America</strong></h5>
                    <h6>Vincent Doye</h6>
                    <h6><a class="text-black" href="mailto:vincent@lesargentins.com">vincent@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+33 6 83 69 84 36">+33 6 83 69 84 36</a></h6>
                </div>        
            </article>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/red-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>Latin America & Caribbean</strong></h5>
                    <h6>Vincent Doye</h6>
                    <h6><a class="text-black" href="mailto:vincent@lesargentins.com">vincent@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+33 6 83 69 84 36">+33 6 83 69 84 36</a></h6>
                </div>
                
            </article>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/black-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>Rest of the World</strong></h5>
                    <h6>Vincent Doye</h6>
                    <h6><a class="text-black" href="mailto:vincent@lesargentins.com">vincent@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+33 6 83 69 84 36">+33 6 83 69 84 36</a></h6>
                </div>
            </article>
        </div>
    </section>
@endsection