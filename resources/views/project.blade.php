@extends('layouts.app')

@section('css')
<style>

.project-banner { background: url("{{ Storage::url($project->project_img) }}") no-repeat center; }
body { overflow-x: hidden; }

</style>
@endsection

@section('content')
<section class="project-banner">
</section>
<section class="mt-2 mt-sm-5 container porject-box-1">
    <h1 class="mt-1 mt-sm-0 mb-sm-4">{{ $project->title }}</h1>
</section>
@foreach ($project->contents->sortBy('order') as $content)
<section class="mt-2 mt-sm-5 porject-box-1 {{ ($content->columns->filter(function($item) { return $item->type == 1; })->count() >= 1) ? 'container' : '' }}">
    <div class="row">
        @for ($i = 0; $i < $content->columns->count(); $i++)
        <article class="col-sm-{{ 12 / $content->columns->count() }}">
            @switch($content->columns[$i]->type)
                @case(1)
                    <h4>{!! $content->columns[$i]->column !!}</h4>
                    @break
                @case(2)
                    <video style="background: transparent url('{{ Storage::url($content->columns[$i]->default) }}') no-repeat 0 0;" class="project-video" poster="{{ Storage::url($content->columns[$i]->default) }}" controls>
                        <source src="{{ Storage::url($content->columns[$i]->column) }}" type="video/mp4">
                    </video>
                    @break
                @case(3)
                    <img src="{{ Storage::url($content->columns[$i]->column) }}" alt="" style="width: 100%">
                @break
                @default
            @endswitch
        </article>
        @endfor
    </div>
</section>
@endforeach
@endsection

@section('footer')
    <footer class="d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center p-4">
            <img src="{{ asset('images/logo-black.png') }}" height="64px" alt="" class="mb-3">
            <h6>All right reserved Les Argentins® 2019</h6>
        </div>
    </footer>
@endsection