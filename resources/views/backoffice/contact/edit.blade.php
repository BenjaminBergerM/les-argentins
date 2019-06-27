@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Edit contact infp</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $contact->title }}">
                    @error('title')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Contact name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $contact->name }}">
                    @error('name')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $contact->email }}">
                    @error('email')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') ?? $contact->phone }}">
                    @error('phone')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <select name="color" id="color" class="form-control">
                        <option value="blue-dot.png" {{ (old('color') == 'blue-dot.png' | $contact->color == 'blue-dot.png') ? 'selected' : '' }}>Blue</option>
                        <option value="yellow-dot.png" {{ (old('color') == 'yellow-dot.png' | $contact->color == 'yellow-dot.png') ? 'selected' : '' }}>Yellow</option>
                        <option value="red-dot.png" {{ (old('color') == 'red-dot.png' | $contact->color == 'red-dot.png') ? 'selected' : '' }}>Red</option>
                        <option value="black-dot.png" {{ (old('color') == 'black-dot.png' | $contact->color == 'black-dot.png') ? 'selected' : '' }}>Black</option>
                    </select>
                    @error('color')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lang">Language</label>
                    <select name="lang" id="lang" class="form-control">
                        <option value="en" {{ (old('lang') == 'en' || $contact->lang == 'en') ? 'selected' : '' }}>EN</option>
                        <option value="es" {{ (old('lang') == 'es' || $contact->lang == 'es') ? 'selected' : '' }}>ES</option>
                        <option value="fr" {{ (old('lang') == 'fr' || $contact->lang == 'fr') ? 'selected' : '' }}>FR</option>
                    </select>
                    @error('lang')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection