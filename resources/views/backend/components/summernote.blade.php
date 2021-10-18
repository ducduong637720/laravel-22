<div class="card-body">
    <textarea id="summernote" rows="10" name="content">
        {{-- Place <em>some</em> <u>text</u> <strong>here</strong> --}}
        @isset($content)
          {{ $content }}
        @endisset
    </textarea>
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
