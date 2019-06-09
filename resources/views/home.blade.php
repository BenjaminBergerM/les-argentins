@extends('layouts.app')

@section('css')
<style>
    .hero { background: url("{{ asset('images/home/background.gif') }}") no-repeat center; }
    .about-us { background: url("{{ asset('images/home/background_2.png') }}") no-repeat center; }
    .creativity { background: url("{{ asset('images/home/background_3.png') }}") no-repeat center; }
    
    .project-1 { background: url("{{ asset('images/projects/1/img_1.png') }}") no-repeat center; }
    .project-2 { background: url("{{ asset('images/projects/2/img_1.png') }}") no-repeat center; }
    .project-3 { background: url("{{ asset('images/projects/3/img_1.png') }}") no-repeat center; }
    .project-4 { background: url("{{ asset('images/projects/4/img_1.png') }}") no-repeat center; }
    .project-5 { background: url("{{ asset('images/projects/5/img_1.png') }}") no-repeat center; }
    .project-6 { background: url("{{ asset('images/projects/6/img_1.png') }}") no-repeat center; }
    .project-7 { background: url("{{ asset('images/projects/7/img_1.png') }}") no-repeat center; }
    
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
            <h3 class="text-white mb-2 col-sm-5 px-0"><strong>Lots has changed since
                we started 10 years ago:</strong></h3>
            <p class="text-white col-sm-5 px-0">Social media is now the <strong>biggest media</strong>, consultants are
                becoming agency holdings and data the big star.
                So after ten years as the ad agency that works for ad
                agencies, <strong>we think it’s time for a change.</strong></p>
        </div>
        <a href="#creativity" class="d-inline-flex flex-column align-items-center" style="position:absolute;left:50%;margin-left: -13px;margin-top: 10px;">
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

        <article class="project project-1 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" style="position:relative;" id="project-1">
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
                        <p class="mt-2"> <a class="text-black" href="/project/1">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="project project-2 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-2">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For pharma companies</strong> looking to spice things up</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('2')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject2" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(2)">&times;</a>
                    <div class="content">
                        <h5><strong>Reproquinol for Vetoquinol</strong><h5>
                        <p class="mt-4">
                            For those of us not in the agricultural field, animal reproduction is a given. But apparently this is not true… not even for rabbits. Vetoquinol, a French veterinary laboratory developed a line of products that can help and they asked us to find a way of making this known. We believe communicating a simple promise in an impactful way is always the best way to go. <br>
                            Luckily they agreed and S&M bunny was born.
                        </p>
                        <img class="mt-3" src="{{ asset('images/projects/2/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/2">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="project project-3 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-3">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For countries</strong> trying to get other countries to drink their beer</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('3')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject3" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(3)">&times;</a>
                    <div class="content">
                        <h5><strong>Japanese Craft Beer for Sopexa NY</strong><h5>
                        <p class="mt-4">Sopexa is a French agency with over 20 offices worldwide that specializes in beverages, food & lifestyle. Their NY and Japan offices were invited to pitch for a campaign promoting Japanese Craft Beers in the US market from the ground up: concept, logo, key visuals, merchandising… the whole package. <br>
                            We decided to try and see what would happen if we represented the US craft beer culture and drinkers in traditional Japanese style, and invited them to drink in a new language.</p>
                        <img class="mt-3" src="{{ asset('images/projects/3/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/3">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="project project-4 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-4">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For in-house agencies</strong> looking for something that is out of this world</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('4')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject4" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(4)">&times;</a>
                    <div class="content">
                        <h5><strong>X-Files for Fox Latin America</strong><h5>
                        <p class="mt-4">André Takeda, VP Creative Services of FOX Latin America has terrific inhouse teams, but sometimes he invites others to collaborate.
                                He asked us to give him a hand in creating buzz around the new X-Files season (Season 10), something that would happen off screen and could amplify in social media to drive viewership of the season premiere. <br>
                                We got nerdy and asked ourselves: UFOs crash all the time, like cars, but… who tows and fixes them? 
                                </p>
                        <img class="mt-3" src="{{ asset('images/projects/4/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/4">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>

        <article class="project project-5 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-5">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For guys</strong> running for President</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('5')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject5" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(5)">&times;</a>
                    <div class="content">
                        <h5><strong>Binner 2015 Campaign</strong><h5>
                        <p class="mt-4">Bruno Moreira, CD at Cheil Paris called us because he needed a viral video to launch the latest Galaxy phone. A product which is great but not significantly different, loaded with features like predictive text and a stylus.
                                “Help me find something different” he says. <br>
                                We found the idea, the artist Mambo, the production and post house WTF/ Chicle and put them together to show off the possibilities of this new phone.
                                </p>
                        <img class="mt-3" src="{{ asset('images/projects/5/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/5">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>

        <article class="project project-6 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-6">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For products</strong> that need a bitchin’ demo</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('6')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject6" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(6)">&times;</a>
                    <div class="content">
                        <h5><strong>Samsung for Cheil</strong><h5>
                        <p class="mt-4">Bruno Moreira, CD at Cheil Paris called us because he needed a viral video to launch the latest Galaxy phone. A product which is great but not significantly different, loaded with features like predictive text and a stylus. <br>
                                “Help me find something different” he says. We found the idea, the artist Mambo, the production and post house WTF/ Chicle and put them together to show off the possibilities of this new phone.
                                </p>
                        <img class="mt-3" src="{{ asset('images/projects/6/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/6">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="project project-7 d-flex flex-comlumn align-items-end align-items-sm-center pb-5 pb-sm-0" id="project-7">
            <div class="container">
                <h3 class="text-white col-sm-5"><strong>For a startup</strong> that needs to be tuned into France</h3>
                <a href="javascript:void(0)" onclick="openProjectNav('7')" class="see-more d-flex flex-row align-items-center mt-4">
                    <img src="{{ asset('images/icons/see-more.png') }}" alt="">
                    <p class="ml-3 mb-0 text-white">See more</p>
                </a>
                <div id="sideNavProject7" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav(7)">&times;</a>
                    <div class="content">
                        <h5><strong>Wix France</strong><h5>
                        <p class="mt-4">Nothing is nicer than being recommended by a client.
                                This is what happened when Valerie Kalifa, marketing manager for Wix France called us on Olivier Altman’s recommendation.
                                They had tapped Altmann&Pacreau for their TV campaign, but they were too busy and suggested Wix call us. The result is an incredibly international campaign: an idea for an Israeli company, that runs in France, shot in Argentina, created by an Argentine & Canadian team with music from a great Canadian studio.</p>
                        <img class="mt-3" src="{{ asset('images/projects/7/project_1.png') }}" alt="">
                        <p class="mt-2"> <a class="text-black" href="/project/7">Click here</a> to see all TV spots and videos.</p>
                    </div>
                </div>
            </div>
        </article>        
    </section>
    <section class="founders d-flex flex-row align-items-center" id="founders">
        <div class="container d-flex flex-sm-row flex-column align-items-center">
            <article class="mr-sm-5 mb-5 mb-sm-0">
                <a href="javascript:void(0)" onclick="openProjectNav('Founder1')" class="d-flex flex-column align-items-center founder">
                    <img width="225px" src="{{ asset('images/home/founders/founder_1.png') }}" class="founder-img" alt="">
                    <h5 class="mt-2">Didier Zakine</h5>
                </a>
                <div id="sideNavProjectFounder1" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav('Founder1')">&times;</a>
                    <div class="content">
                        <h5><strong>Didier Zakine</strong><h5>
                        <p class="mt-4">Didier a fait ses classes en France, dans les rangs du groupe L'Oréal au sein des services marketing de Gemey Maybeline puis Elseve.
                                Il rejoint le Groupe Publicis puis l’agence française Venise en tant que Directeur Commercial. Au fil des années, il a accompagné des annonceurs tels que L'Oréal, Givenchy, Kodak et Iams Eukanuba. Il débarque avec sa famille en Argentine début 2008, le temps d'un MBA avant de créer Les Argentins. Il est marié à Jessica - Architecte- et ont trois enfants de 11, 9 et 2 ans, Even, Eléa et Amos. En 2011, ils décident de rentrer en France pour se rapprocher de leurs proches et pour asseoir le développement de Les Argentins en Europe.
                                </p>
                    </div>
                </div>
            </article>
            <article class="d-flex flex-column align-items-center">
                <a href="javascript:void(0)" onclick="openProjectNav('Founder2')" class="d-flex flex-column align-items-center founder">
                    <img width="225px" src="{{ asset('images/home/founders/founder_2.png') }}" class="founder-img" alt="">
                    <h5 class="mt-2">Mariano Favetto</h5>
                </a>
                <div id="sideNavProjectFounder2" class="sidenav project-sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeProjectNav('Founder2')">&times;</a>
                    <div class="content">
                        <h5><strong>Mariano Favetto</strong><h5>
                        <p class="mt-4">Mariano débute sa carrière dans l'agence argentine la plus créative de son époque avant d'entamer un tour du monde pour le compte de l’agence Saatchi & Saatchi du Groupe Publicis. Il occupera le poste de Directeur de la Création des filiales de New York, Toronto, Sydney et Paris où il signera les campagnes Toyota, Sony et Procter & Gamble. Ses films, vus dans le monde entier, ont été plusieurs fois primés dans les meilleurs festivals de publicité. Il fonde avec Didier Les Argentins où il occupe le rôle de Directeur de la Création. Il est aussi marié à une Jessica - Publicitaire - et ont deux enfants de 18 et 15 ans, Lucca et Massimo.
                            </p>
                    </div>
                </div>
            </article>
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
                    <h6>Liz Marks</h6>
                    <h6><a class="text-black" href="mailto:liz@lesargentins.com">liz@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+1 646 634 1619">+1 646 634 1619</a></h6>
                </div>        
            </article>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/red-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>Latin America & Caribbean</strong></h5>
                    <h6>Helios Garnier</h6>
                    <h6><a class="text-black" href="mailto:helios@lesargentins.com">helios@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+54 911 2454 4385">+54 911 2454 4385</a></h6>
                </div>
                
            </article>
            <article class="d-flex flex-row mb-4 mb-sm-3">
                <img src="{{ asset('images/icons/black-dot.png') }}" alt="" width="28px" height="28px">
                <div class="d-flex flex-column ml-4">
                    <h5 class="mb-2"><strong>Rest of the World</strong></h5>
                    <h6>Didier Zakine</h6>
                    <h6><a class="text-black" href="mailto:didier@lesargentins.com">didier@lesargentins.com</a></h6>
                    <h6><a class="text-black" href="tel:+ 33 6 09 05 34 52">+ 33 6 09 05 34 52</a></h6>
                </div>
            </article>
        </div>
    </section>
@endsection