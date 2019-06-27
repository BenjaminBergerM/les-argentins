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
        <h5 class="card-header">Contact info</h5>
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
                    <a class="btn btn-primary text-white" href="{{ route('backoffice.contact.create') }}">+</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $contact->id }}</th>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>
                            <a href="{{ route('backoffice.contact.edit', $contact->id) }}"><i class="far fa-edit"></i></a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('contact-delete-{{ $contact->id }}').submit();">
                                <i class="far fa-trash-alt"></i>
                            </a>

                            <form id="contact-delete-{{ $contact->id }}" action="{{ route('backoffice.contact.destroy', $contact->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('delete')
                            </form>
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