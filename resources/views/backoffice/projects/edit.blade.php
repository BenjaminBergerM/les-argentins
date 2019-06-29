@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Edit Project</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $project->title }}">
                    @error('title')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="home_text">Home text</label>
                    <textarea id="home_text" name="home_text">{{ old('home_text') ?? $project->home_text }}</textarea>
                    @error('home_text')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="home_background">Home background (Recommended resolution: 1920x1080px)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('home_background') is-invalid @enderror" id="home_background" name="home_background" value="{{ old('home_background') ?? $project->home_background }}">
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
                    <textarea id="sidenav_detail" name="sidenav_detail">{{ old('sidenav_detail') ?? $project->sidenav_detail }}</textarea>
                    @error('sidenav_detail')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sidenav_img">Sidenav image (Recommended resolution: 1920x540px)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('sidenav_img') is-invalid @enderror" id="sidenav_img" name="sidenav_img" value="{{ old('sidenav_img') ?? $project->sidenav_img }}">
                        <label class="custom-file-label" for="sidenav_img">Choose file</label>
                        @error('sidenav_img')
                            <span class="error-label" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="project_img">Project image (Recommended resolution: 1920x540px)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('project_img') is-invalid @enderror" id="project_img" name="project_img" value="{{ old('project_img') ?? $project->project_img }}">
                        <label class="custom-file-label" for="project_img">Choose file</label>
                        @error('project_img')
                            <span class="error-label" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
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