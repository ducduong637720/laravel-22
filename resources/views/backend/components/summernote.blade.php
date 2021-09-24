<div class="card-body">
    <textarea id="summernote" rows="10" name="content">
        Place <em>some</em> <u>text</u> <strong>here</strong>
    </textarea>
  </div>
  
  @push('stack-scripts')
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
  @endpush