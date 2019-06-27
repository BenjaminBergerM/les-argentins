@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Create new Project</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="home_text">Home text</label>
                    <textarea id="home_text" name="home_text">{{ old('home_text') }}</textarea>
                    @error('home_text')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="home_background">Home background</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('home_background') is-invalid @enderror" id="home_background" name="home_background" value="{{ old('home_background') }}">
                        <label class="custom-file-label" for="home_background">Choose file</label>
                        @error('home_background')
                            <span class="error-label" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="sidenav_detail">Sidenav detail</label>
                    <textarea id="sidenav_detail" name="sidenav_detail" value="{{ old('sidenav_detail') }}"></textarea>
                    @error('sidenav_detail')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sidenav_img">Sidenav image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('sidenav_img') is-invalid @enderror" id="sidenav_img" name="sidenav_img" value="{{ old('sidenav_img') }}">
                        <label class="custom-file-label" for="sidenav_img">Choose file</label>
                        @error('sidenav_img')
                            <span class="error-label" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="project_img">Project image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('project_img') is-invalid @enderror" id="project_img" name="project_img" value="{{ old('project_img') }}">
                        <label class="custom-file-label" for="project_img">Choose file</label>
                        @error('project_img')
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
    $('#sidenav_detail').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
    $('#home_text').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
</script>
@endsection