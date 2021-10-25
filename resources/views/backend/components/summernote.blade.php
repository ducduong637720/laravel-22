<div class="form-group">
    <textarea id="summernote" rows="10" name="content" class="form-control @error('content') is-invalid @enderror"
        value="{{ old('content') }}">
        @isset($content)
              {{ $content }}
        @endisset
    </textarea>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

@push('stack-scripts')
    <script>
        $(function() {
            $('#summernote').summernote()
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
