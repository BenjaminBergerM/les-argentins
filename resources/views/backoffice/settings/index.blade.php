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
            <form action="{{ route('backoffice.settings.home_images.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h5>Home Backgrounds</h5>
                <p style="font-size: 12px; margin: 0px;">Recommended resolution: 1920x1080px</p>
                <p style="font-size: 12px;">Recommended responsive resolution: 1080x1920px</p>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="first_image">Hero</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('first_image') is-invalid @enderror" id="first_image" name="first_image" value="{{ old('first_image') }}">
                                <label class="custom-file-label" for="first_image">Choose file</label>
                                @error('first_image')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_image_responsive">Hero responsive</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('first_image_responsive') is-invalid @enderror" id="first_image_responsive" name="first_image_responsive" value="{{ old('first_image_responsive') }}">
                                <label class="custom-file-label" for="first_image_responsive">Choose file</label>
                                @error('first_image_responsive')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="second_image">About us image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('second_image') is-invalid @enderror" id="second_image" name="second_image" value="{{ old('second_image') }}">
                                <label class="custom-file-label" for="second_image">Choose file</label>
                                @error('second_image')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="second_image_responsive">About us image responsive</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('second_image_responsive') is-invalid @enderror" id="second_image_responsive" name="second_image_responsive" value="{{ old('second_image_responsive') }}">
                                <label class="custom-file-label" for="second_image_responsive">Choose file</label>
                                @error('second_image_responsive')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="third_image">Creativity image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('third_image') is-invalid @enderror" id="third_image" name="third_image" value="{{ old('third_image') }}">
                                <label class="custom-file-label" for="third_image">Choose file</label>
                                @error('third_image')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="third_image_responsive">Creativity responsive</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('third_image_responsive') is-invalid @enderror" id="third_image_responsive" name="third_image_responsive" value="{{ old('third_image_responsive') }}">
                                <label class="custom-file-label" for="third_image_responsive">Choose file</label>
                                @error('third_image_responsive')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="founders_image">Founders image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('founders_image') is-invalid @enderror" id="founders_image" name="founders_image" value="{{ old('founders_image') }}">
                                <label class="custom-file-label" for="founders_image">Choose file</label>
                                @error('founders_image')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="founders_image_responsive">Founders responsive</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('founders_image_responsive') is-invalid @enderror" id="founders_image_responsive" name="founders_image_responsive" value="{{ old('founders_image_responsive') }}">
                                <label class="custom-file-label" for="founders_image_responsive">Choose file</label>
                                @error('founders_image_responsive')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="contact_image">Contact image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('contact_image') is-invalid @enderror" id="contact_image" name="contact_image" value="{{ old('contact_image') }}">
                                <label class="custom-file-label" for="contact_image">Choose file</label>
                                @error('contact_image')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_image_responsive">Contact responsive</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('contact_image_responsive') is-invalid @enderror" id="contact_image_responsive" name="contact_image_responsive" value="{{ old('contact_image_responsive') }}">
                                <label class="custom-file-label" for="contact_image_responsive">Choose file</label>
                                @error('contact_image_responsive')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
            <hr>
            <form action="{{ route('backoffice.settings.home_texts.update') }}" method="POST" id="home-texts">
                @csrf
                @method('put')
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
                    <label for="home_title">Title</label>
                    <input type="text" class="form-control @error('home_title') is-invalid @enderror" id="home_title" name="home_title" value="{{ old('home_title') ?? $home_title->value}}">
                    @error('home_title')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="home_detail">Home text</label>
                    <textarea id="home_detail" name="home_detail">{{ old('home_detail') ?? $home_detail->value }}</textarea>
                    @error('home_detail')
                        <span class="error-label" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
            <hr>
            <h5>Enable/Disable Navbar languages buttons</h5>
            <form action="{{ route('backoffice.settings.lang.update') }}" method="POST" id="lang-button">
                @csrf
                @method('put')
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="home_en_button" name="home_en_button" {{ ($langs->filter(function($item) { return $item->key == 'home_en_button'; })->first()->value) ? 'checked' : '' }}>
                    <label class="form-check-label" for="home_en_button">
                        EN
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="home_es_button" name="home_es_button" {{ ($langs->filter(function($item) { return $item->key == 'home_es_button'; })->first()->value) ? 'checked' : '' }}>
                    <label class="form-check-label" for="home_es_button">
                        ES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="home_fr_button" name="home_fr_button" {{ ($langs->filter(function($item) { return $item->key == 'home_fr_button'; })->first()->value) ? 'checked' : '' }}>
                    <label class="form-check-label" for="home_fr_button">
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
    window.location.href = '?lang='+value+'#home-texts';
}
$('#home_detail').summernote({
    placeholder: 'Write here ...',
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
    ],
});
</script>
@endsection