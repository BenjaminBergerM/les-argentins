@extends('layouts.app-orignial')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Editing content for {{ $project->title }}</h5>
        <div class="card-body">
            <form action="{{ route('backoffice.projects.contents.update', [$project->id, $content->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <section>
                    @php $var = 1; @endphp
                    @foreach ($content->columns as $column)
                    <article id="column-{{ $var }}">
                            <h4>Column {{ $var }}</h4>
                            <div class="form-group" style="display:none;">
                                <label for="column_type_{{ $var }}">Type</label>
                                <select name="column_type_{{ $var }}" id="column_type_{{$var}}" class="form-control">
                                    <option value="1" {{ $column->type == 1 ? 'selected':'' }}>Text</option>
                                    <option value="2" {{ $column->type == 2 ? 'selected':'' }}>Video</option>
                                    <option value="3" {{ $column->type == 3 ? 'selected':'' }}>Image</option>
                                </select>
                            </div>
                            <div id="text-{{ $var }}">
                                <div class="form-group">
                                    <label for="column_text_{{ $var }}">Text</label>
                                    <textarea id="column_text_{{ $var }}" name="column_text_{{$var}}">{{ old('column_text_'.$var) ?? $column->column }}</textarea>
                                    @error('column_text_'.$var)
                                        <span class="error-label" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div id="video-{{ $var }}" style="display: none;">
                                <div class="form-group">
                                    <label for="column_video_{{ $var }}">Video</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_video_'.$var) is-invalid @enderror" id="column_video_{{$var}}" name="column_video_{{$var}}" value="{{ old('column_video_'.$var) }}">
                                        <label class="custom-file-label" for="column_video_{{$var}}">Choose file</label>
                                        @error('column_video_'.$var)
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="column_video_{{ $var }}">Default image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_video_{{ $var }}') is-invalid @enderror" id="column_video_{{ $var }}" name="column_video_{{ $var }}" value="{{ old('column_video_'.$var) }}">
                                        <label class="custom-file-label" for="column_video_{{ $var }}">Choose file</label>
                                        @error('column_video_'.$var)
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                            <div id="image-{{ $var }}" style="display: none;">
                                <div class="form-group">
                                    <label for="column_image_{{ $var }}">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('column_image_{{ $var }}') is-invalid @enderror" id="column_image_{{ $var }}" name="column_image_{{ $var }}" value="{{ old('column_image_'.$var) }}">
                                        <label class="custom-file-label" for="column_image_{{ $var }}">Choose file</label>
                                        @error('column_image_'.$var)
                                            <span class="error-label" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </article>
                        @php $var++; @endphp
                    @endforeach
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

    function selectedType(column_1) {

        let select = document.querySelector('#column_type_' + column_1);
        if (select != null) {
            let text = document.querySelector('#text-' + column_1);
            let video = document.querySelector('#video-' + column_1);
            let image = document.querySelector('#image-' + column_1);
            
            hideFields(text, video, image);
            
            if (select.value == 1) {
                text.style.display = 'block';
            }
            if (select.value == 2) {
                video.style.display = 'block';
            }
            if (select.value == 3) {
                image.style.display = 'block';
            }
        }

    }

    function hideFields(...fields) {
        fields.forEach(e => {
            e.style.display = 'none';
        });
    }

    selectedType(1);
    selectedType(2);
    selectedType(3);
    selectedType(4);

</script>

@endsection