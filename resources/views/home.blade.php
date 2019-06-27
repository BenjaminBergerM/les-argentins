@extends('layouts.app')

@section('css')
<style>
    .hero { background: url("{{ asset('images/home/background.gif') }}") no-repeat center; }
    .about-us { background: url("{{ asset('images/home/background_2.png') }}") no-repeat center; }
    .creativity { background: url("{{ asset('images/home/background_3.png') }}") no-repeat center; }
    
    @for ($i = 0; $i < $projects->count(); $i++)
        @php $img = Storage::url($projects[$i]->home_background); @endphp
        {{ ".project-$i { background: url($img) no-repeat center; }" }}
    @endfor
    
    .founders { background: url("{{ asset('images/home/founders.png') }}") no-repeat center; }
    .contact { background: url("{{ asset('images/home/mapa.png') }}") no-repeat center; }
    
    @media only screen and (max-width: 576px) {
        .hero { background: url("{{ asset('images/home/background_phone.gif') }}") no-repeat center; }
        .about-us { background: url("{{ asset('images/home/background_2_phone.png') }}") no-repeat center; }
        .creativity { background: url("{{ asset('images/home/background_3_phone.png') }}") no-repeat center; }
        .contact { background: url("{{ asset('images/home/mapa_phone.png') }}") no-repeat center; }
    }

</style>   
@endsection

@section('content')
    <section class="hero d-flex flex-comlumn align-items-end justify-content-center" id="hero">
        <a href="#about-us" class="d-inline-flex flex-column align-items-center">
            <img src="{{ asset('images/icons/down.png') }}" alt="" width="16px" height="33px">
            <p class="text-white mt-1" style="font-size: 10px;">Scroll</p>
        </a>
    </section>
    <section id="about-us" class="about-us d-flex flex-comlumn align-items-end pb-2">
        <div class="container pb-5 text-center text-sm-left">
            <h3 class="text-white mb-2 col-sm-5 px-0"><strong>Lots has changed since
                we started 10 years ago:</strong></h3>
            <p class="text-white col-sm-5 px-0">Social media is now the <strong>biggest media</strong>, consultants are
                becoming agency holdings and data the big star.
                So after ten years as the ad agency that works for ad
                agencies, <strong>we think it’s time for a change.</strong></p>
        </div>
        <a href="#creativity" class="scroll d-inline-flex flex-column align-items-center" style="position:absolute;left:50%;margin-left: -13px;margin-top: 10px;">
            <div style="height: 22px; width: 1px; background: #fff;"></div>
            <p class="text-white mt-1" style="font-size: 10px;">Scroll</p>
        </a>
    </section>
    <section class="creativity d-flex flex-comlumn align-items-end justify-content-center" id="creativity">
        <a href="#project-1" class="d-inline-flex flex-column align-items-center">
            <div style="height: 22px; width: 1px; background: #000;"></div>
            <p class="text-black mt-1" style="font-size: 10px;">Scroll</p>
        </a>
    </section>
    <section>
        @for ($i = 0; $i < $projects->count(); $i++)
        <article class="project project-{{$i}} d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" style="position:relative;" id="project-1">
            <div class="container">
                <h3 class="text-white col-sm-5 p-0">{!! $projects[$i]->home_text !!}</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('{{ $i }}')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject{{ $i }}" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav({{ $i }})">&times;</a>
                    <div class="content">
                        <h5><strong>{{ $projects[$i]->title }}</strong><h5>
                        <p class="mt-4">{!! $projects[$i]->sidenav_detail !!}</p>
                        <img class="mt-3" src="{{ Storage::url($projects[$i]->sidenav_img) }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="{{ route('projects.show', $projects[$i]->id )}}">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>
        @endfor 
    </section>
    <section class="founders d-flex flex-row align-items-center" id="founders">
        <div class="container d-flex flex-sm-row flex-column align-items-center">
            @foreach ($founders as $founder)                
            <article class="mr-sm-5 mb-5 mb-sm-0">
                <a href="javascript:void(0)" onclick="openProjectNav('Founder1')" class="d-flex flex-column align-items-center founder">
                    <img width="225px" src="{{ Storage::url($founder->image) }}" class="founder-img" alt="">
                    <h6 class="mt-2">{{ $founder->name }}</h6>
                </a>
                <div id="sideNavProjectFounder1" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav('Founder1')">&times;</a>
                    <div class="content">
                        <h5><strong>{{ $founder->name }}</strong><h5>
                        <p class="mt-4">{!! $founder->description !!}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>
    <section class="contact pt-sm-5 p-0" id="contact">
        <div class="container pt-5 pt-sm-4">
            <h3 class="mb-5">Contacts</h3>
            @foreach ($contacts as $contact)
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/'.$contact->color) }}" alt="" width="28px" height="28px" class="hidden-sm-down">
                <div class="d-flex flex-column ml-sm-4">
                    <h5 class="mb-2"><strong>{{ $contact->title }}</strong></h5>
                    <h6>{{ $contact->name }}</h6>
                    <h6><a class="text-black" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></h6>
                    <h6><a class="text-black" href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></h6>
                </div>
            </article>
            @endforeach
        </div>
    </section>
@endsection