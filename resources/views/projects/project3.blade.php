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
        <h1 class="col-12 mb-4">Japanese Craft Beer for Sopexa NY</h1>
        <article class="col-sm-6">
            <h4>Craft beers are on the rise all over the world. Small breweries are popping up everywhere and localized production and consumption abound. So it is natural that governments step in and help these small local industries expand and conquer markets elsewhere the same way they do with wines, cheeses and local produce. We had the chance to pitch alongside Sopexa
                NY for such an initiative by Jfoodo, The Japan Food Product Overseas Promotion Center.
                <br><br>
                The difficulty of this communication is that unlike promoting a specific brand of beer, there are a myriad of different tastes, ingredients and styles of beer involved. You cannot generalize on anything… except the origin and the craft.
                <br><br>
                We chose to build the idea around Japanese craftsmanship, a </h4>
        </article>
        <article class="col-sm-6">
            <h4>quality that is recognized world wide in a range of products and industries but that had not been related to beer and that could be seen as too traditional for the intended craft beer consumer. So, we did one of the things we love to do: mix and merge. Mix Japanese craftsmanship with North American craft beer culture. We took inspiration for the Japanese Craft Beer logo from the Hanko, the seal used by many Japanese, including craftsmen as a signature and which can be seen mostly in red in a lot of famous Japanese artwork.
                <br><br>
                Then we decided to work with Hugo Horita, a Japanese-Argentine illustrator to create a key visual in the style of Ukiyo-e prints, but representing modern day American consumers. We also found a compelling invitation for the ever experimenting foodie that would be our consumer: Drink in a new language.</h4>
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