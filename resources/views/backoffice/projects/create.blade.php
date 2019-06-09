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
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Home text</label>
                    <input type="text" class="form-control @error('home_text') is-invalid @enderror" id="home_text" name="home_text" value="{{ old('home_text') }}">
                    @error('home_text')
                        <span class="invalid-feedback" role="alert">
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
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Sidenav detaill</label>
                    <input type="text" class="form-control @error('sidenav_detaill') is-invalid @enderror" id="home_text" name="sidenav_detaill" value="{{ old('sidenav_detaill') }}">
                    @error('sidenav_detaill')
                        <span class="invalid-feedback" role="alert">
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
                            <span class="invalid-feedback" role="alert">
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
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection