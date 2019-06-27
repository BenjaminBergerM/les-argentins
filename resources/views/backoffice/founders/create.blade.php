@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Add founder</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.founders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="founder_image">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('founder_image') is-invalid @enderror" id="founder_image" name="founder_image" value="{{ old('founder_image') }}">
                        <label class="custom-file-label" for="founder_image">Choose file</label>
                        @error('founder_image')
                            <span class="error-label" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="lang">Language</label>
                    <select name="lang" id="lang" class="form-control">
                        <option value="en" {{ (old('lang') == 'en') ? 'selected' : '' }}>EN</option>
                        <option value="es" {{ (old('lang') == 'es') ? 'selected' : '' }}>ES</option>
                        <option value="fr" {{ (old('lang') == 'fr') ? 'selected' : '' }}>FR</option>
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

@section('js')
<script>
    $('#description').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
</script>
@endsection