@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Create content for {{ $project->title }}</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.projects.contents.store', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <section>
                    <article id="column-1">
                        <h4>Column 1</h4>
                        <div class="form-group">
                            <label for="column_type_1">Type</label>
                            <select name="column_type_1" id="column_type_1" onchange="selectedType(this, 1)" class="form-control">
                                <option value="1">Text</option>
                                <option value="2">Video</option>
                                <option value="3">Image</option>
                            </select>
                        </div>
                        <div id="text-1">
                            <div class="form-group">
                                <label for="column_text_1">Text</label>
                                <textarea id="column_text_1" name="column_text_1">{{ old('column_text_1') }}</textarea>
                                @error('column_text_1')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="video-1" style="display: none;">
                            <div class="form-group">
                                <label for="column_video_1">Video</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_video_1') is-invalid @enderror" id="column_video_1" name="column_video_1" value="{{ old('column_video_1') }}">
                                    <label class="custom-file-label" for="column_video_1">Choose file</label>
                                    @error('column_video_1')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="column_default_1">Default image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_default_1') is-invalid @enderror" id="column_default_1" name="column_default_1" value="{{ old('column_default_1') }}">
                                    <label class="custom-file-label" for="column_default_1">Choose file</label>
                                    @error('column_default_1')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                        <div id="image-1" style="display: none;">
                            <div class="form-group">
                                <label for="column_image_1">Image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_image_1') is-invalid @enderror" id="column_image_1" name="column_image_1" value="{{ old('column_image_1') }}">
                                    <label class="custom-file-label" for="column_image_1">Choose file</label>
                                    @error('column_image_1')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </article>
                    <article id="column-2">
                        <h4>Column 2</h4>
                        <div class="form-group">
                            <label for="column_type_2">Type</label>
                                    <select name="column_type_2" id="column_type_2" onchange="selectedType(this, 2)" class="form-control">
                                        <option value="1">Text</option>
                                        <option value="2">Video</option>
                                        <option value="3">Image</option>
                                    </select>
                            </div>
                            <div id="text-2">
                                <div class="form-group">
                                    <label for="column_text_2">Text</label>
                                    <textarea id="column_text_2" name="column_text_2">{{ old('column_text_2') }}</textarea>
                                    @error('column_text_2')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div id="video-2" style="display: none;">
                                <div class="form-group">
                                    <label for="column_video_2">Video</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_video_2') is-invalid @enderror" id="column_video_2" name="column_video_2" value="{{ old('column_video_2') }}">
                                        <label class="custom-file-label" for="column_video_2">Choose file</label>
                                        @error('column_video_2')
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="column_default_2">Default image (Recommended resolution: 1920x1080px)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_default_2') is-invalid @enderror" id="column_default_2" name="column_default_2" value="{{ old('column_default_2') }}">
                                        <label class="custom-file-label" for="column_default_2">Choose file</label>
                                        @error('column_default_2')
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div id="image-2" style="display: none;">
                                <div class="form-group">
                                    <label for="column_image_2">Image (Recommended resolution: 1920x1080px)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_image_2') is-invalid @enderror" id="column_image_2" name="column_image_2" value="{{ old('column_image_2') }}">
                                        <label class="custom-file-label" for="column_image_2">Choose file</label>
                                        @error('column_image_2')
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </article>
                    <article id="column-3">
                        <h4>Column 3</h4>
                        <div class="form-group">
                            <label for="column_type_3">Type</label>
                            <select name="column_type_3" id="column_type_3" onchange="selectedType(this, 3)" class="form-control">
                                <option value="1">Text</option>
                                <option value="2">Video</option>
                                <option value="3">Image</option>
                            </select>
                        </div>
                        <div id="text-3">
                            <div class="form-group">
                                <label for="column_text_3">Text</label>
                                <textarea id="column_text_3" name="column_text[]">{{ old('column_text_3') }}</textarea>
                                @error('column_text_3')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="video-3" style="display: none;">
                            <div class="form-group">
                                <label for="column_video_3">Video</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_video_3') is-invalid @enderror" id="column_video_3" name="column_video_3" value="{{ old('column_video_3') }}">
                                    <label class="custom-file-label" for="column_video_3">Choose file</label>
                                    @error('column_video_3')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="column_default_3">Default image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_default_3') is-invalid @enderror" id="column_default_3" name="column_default_3" value="{{ old('column_default_3') }}">
                                    <label class="custom-file-label" for="column_default_3">Choose file</label>
                                    @error('column_default_3')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="image-3" style="display: none;">
                            <div class="form-group">
                                <label for="column_image_3">Image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_image_3') is-invalid @enderror" id="column_image_3" name="column_image_3" value="{{ old('column_image_3') }}">
                                    <label class="custom-file-label" for="column_image_3">Choose file</label>
                                    @error('column_image_3')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </article>
                    <article id="column-4">
                        <h4>Column 4</h4>
                        <div class="form-group">
                            <label for="column_type_4">Type</label>
                            <select name="column_type_4" id="column_type_4" onchange="selectedType(this, 4)" class="form-control">
                                <option value="1">Text</option>
                                <option value="2">Video</option>
                                <option value="3">Image</option>
                            </select>
                        </div>
                        <div id="text-4">
                            <div class="form-group">
                                <label for="column_text_4">Text</label>
                                <textarea id="column_text_4" name="column_text_4">{{ old('column_text_4') }}</textarea>
                                @error('column_text_4')
                                    <span class="error-label" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="video-4" style="display: none;">
                            <div class="form-group">
                                <label for="column_video_4">Video</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_video_4') is-invalid @enderror" id="column_video_4" name="column_video_4" value="{{ old('column_video_4') }}">
                                    <label class="custom-file-label" for="column_video_4">Choose file</label>
                                    @error('column_video_4')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="column_default_4">Default image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_default_4') is-invalid @enderror" id="column_default_4" name="column_default_4" value="{{ old('column_default_4') }}">
                                    <label class="custom-file-label" for="column_default_4">Choose file</label>
                                    @error('column_default_4')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="image-4" style="display: none;">
                            <div class="form-group">
                                <label for="column_image_4">Image (Recommended resolution: 1920x1080px)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('column_image_4') is-invalid @enderror" id="column_image_4" name="column_image_4" value="{{ old('column_image_4') }}">
                                    <label class="custom-file-label" for="column_image_4">Choose file</label>
                                    @error('column_image_4')
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $('#column_text_1').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
    $('#column_text_2').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
    $('#column_text_3').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });
    $('#column_text_4').summernote({
        placeholder: 'Write here ...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
        ],
    });

    let visibible_columns = 1; 

    document.querySelector('#add-button').addEventListener('click', function(event) {
        event.preventDefault();
        console.log(visibible_columns);
        
        if (visibible_columns < 3) {
            visibible_columns++;
            document.querySelector('#column-'+visibible_columns).style.display = 'block';
        } else {
            this.style.display = 'none';
        }
    });

    function removeColumn() {

    }

    function selectedType(event, column_1) {

        let text = document.querySelector('#text-' + column_1);
        let video = document.querySelector('#video-' + column_1);
        let image = document.querySelector('#image-' + column_1);
        
        hideFields(text, video, image);
        
        if (event.value == 1) {
            text.style.display = 'block';
        }
        if (event.value == 2) {
            video.style.display = 'block';
        }
        if (event.value == 3) {
            image.style.display = 'block';
        }

    }

    function hideFields(...fields) {
        fields.forEach(e => {
            e.style.display = 'none';
        });
    }

</script>
@endsection