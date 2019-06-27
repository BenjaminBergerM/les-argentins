@extends('layouts.app-orignial')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>                
        </div>          
    @endif
    
    <div class="card">
        <h5 class="card-header">{{ $project->title . ' | Content builder' }}</h5>
        <section class="card-body">
            @foreach ($project->contents->sortBy('order') as $content)
            <article style="padding: 6px; margin: 0px; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid;">

                <a href="{{ route('backoffice.projects.contents.edit', [$project->id, $content->id]) }}"><i class="far fa-edit"></i></a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('content-delete-{{ $content->id }}').submit();">
                    <i class="far fa-trash-alt"></i>
                </a>
                {{-- <a href="{{ route('backoffice.projects.contents.up', [$project->id, $content->id]) }}"><i class="fas fa-arrow-up"></i></a>
                <a href="{{ route('backoffice.projects.contents.down', [$project->id, $content->id]) }}"><i class="fas fa-arrow-down"></i></a> --}}

                <form id="content-delete-{{ $content->id }}" action="{{ route('backoffice.projects.contents.destroy', [$project->id, $content->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('delete')
                </form>
            </article>
            <article class="mb-2 mb-sm-3" style="border: 1px solid black; padding: 10px;">
                <div class="row">
                    @for ($i = 0; $i < $content->columns->count(); $i++)
                    <article class="col-sm-{{ 12 / $content->columns->count() }}">
                        @switch($content->columns[$i]->type)
                            @case(1)
                                <h4>{!! $content->columns[$i]->column !!}</h4>
                                @break
                            @case(2)
                                <video style="width: 100%" poster="{{ Storage::url($content->columns[$i]->default) }}" controls>
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
            </article>
            @endforeach
            <article class="mb-2 mb-sm-3">
                <div class="row">
                    <article class="col-sm-12 text-center">
                        <a href="{{ route('backoffice.projects.contents.create', $project->id) }}" class="btn btn-primary">Add more content</a>
                    </article>
                </div>
            </article>    
        </section>
    </div>
</div>
@endsection