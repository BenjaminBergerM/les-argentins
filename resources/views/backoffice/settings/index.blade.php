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
        <h5 class="card-header">Settings</h5>
        <div class="card-body">
            <form action="">
                <h5>Home Backgrounds</h5>
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">First image</label>
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
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">Second image</label>
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
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">Third image</label>
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
                </div>

                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">First image responsive</label>
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
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">Second image responsive</label>
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
                    <div class="form-group col-sm-4">
                        <label for="sidenav_img">Third image responsive</label>
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
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
            <hr>
            <form action="">
                <div class="row mb-3">
                    <div class="col-sm-11">
                        <h5>Home Text</h5>
                    </div>
                    <div class="col-sm-1">
                        <select name="lang" onchange="filter('lang', this.value)" class="form-control">
                            <option value="en" {{ (Request::get('lang') == 'en') ? 'selected' : '' }}>EN</option>
                            <option value="es" {{ (Request::get('lang') == 'es') ? 'selected' : '' }}>ES</option>
                            <option value="fr" {{ (Request::get('lang') == 'fr') ? 'selected' : '' }}>FR</option>
                        </select>
                    </div>
                </div>
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
                <button class="btn btn-primary">Save</button>
            </form>
            <hr>
            <h5>Enable/Disable Navbar button</h5>
            <form action="">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        EN
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        ES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        FR
                    </label>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
function filter(key, value) {
    window.location.href = '?lang='+value;
}
$('#home_text').summernote({
    placeholder: 'Write here ...',
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
    ],
});
</script>
@endsection