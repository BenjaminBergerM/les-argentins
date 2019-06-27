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
        <h5 class="card-header">Projects</h5>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-1">
                    <select name="lang" onchange="filter('lang', this.value)" class="form-control">
                        <option value="en" {{ (Request::get('lang') == 'en') ? 'selected' : '' }}>EN</option>
                        <option value="es" {{ (Request::get('lang') == 'es') ? 'selected' : '' }}>ES</option>
                        <option value="fr" {{ (Request::get('lang') == 'fr') ? 'selected' : '' }}>FR</option>
                    </select>
                </div>
                <div class="col-sm-9"></div>
                <div class="col-sm-1 ml-auto">
                    <a class="btn btn-primary text-white" href="{{ route('backoffice.projects.create') }}">+</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>
                            <a href="{{ route('backoffice.projects.edit', $project->id) }}"><i class="far fa-edit"></i></a>
                            <a href=""><i class="far fa-trash-alt"></i></a>
                            <a href="{{ route('backoffice.projects.contents.index', $project->id) }}"><i class="fas fa-plus"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
function filter(key, value) {
    window.location.href = '?lang='+value;
}
</script>
@endsection