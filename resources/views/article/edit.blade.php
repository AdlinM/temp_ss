@extends('layouts.admin')

@section('styles')
<link href="/assets/plugins/materialNote/css/materialNote.css" rel="stylesheet" />
<link href="/assets/plugins/materialNote/css/codeMirror/codemirror.css" rel="stylesheet" />
<link href="/assets/plugins/materialNote/css/codeMirror/monokai.css" rel="stylesheet" />

<style type="text/css">
.note-editor .note-toolbar {
  z-index: 10 !important;
}
.material-design-hamburger a, nav .nav-wrapper> ul > li > a {
    display: block !important;
}
</style>
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
  <script src="/assets/plugins/materialNote/js/ckMaterializeOverrides.js" type="text/javascript"></script>
  <script src="/assets/plugins/materialNote/lib/codeMirror/codemirror.js" type="text/javascript"></script>
  <script src="/assets/plugins/materialNote/lib/codeMirror/xml.js" type="text/javascript"></script>
  <script src="/assets/plugins/materialNote/js/materialNote.js" type="text/javascript"></script>

  <script type="text/javascript">
      var toolbar = [
          ['style', ['style', 'bold', 'italic', 'underline', 'strikethrough', 'clear']],
          ['fonts', ['fontsize', 'fontname']],
          ['color', ['color']],
          ['undo', ['undo', 'redo', 'help']],
          ['ckMedia', ['ckImageUploader', 'ckVideoEmbeeder']],
          ['misc', ['link', 'picture', 'table', 'hr', 'codeview', 'fullscreen']],
          ['para', ['ul', 'ol', 'paragraph', 'leftButton', 'centerButton', 'rightButton', 'justifyButton', 'outdentButton', 'indentButton']],
          ['height', ['lineheight']],
      ];

      $('.editor').materialnote({
          toolbar: toolbar,
          height: 550,
          minHeight: 100,
          defaultBackColor: '#fff'
      });

      $('.editorAir').materialnote({
          airMode: true,
          airPopover: [
              ['color', ['color']],
              ['font', ['bold', 'underline', 'clear']],
              ['para', ['ul', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture']]
          ]
      });

      $('.note-editor').find('button').click(function(e){
        e.preventDefault();
      });
  </script>
@endsection

@section('content')
  <div class="row">
      <div class="col s12 m12 l12">
          <div class="card">
              <div class="card-content">
                      <div>
                          <h4>Buat Artikel Baru</h4>
                          <section>
                              <div class="wizard-content">
                                  @if($errors->any())
                                  <div class="row">
                                    <div class="alert alert-danger text-red" style="color:red">
                                        @foreach($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                  </div>
                                  @endif

                                  @if(Session::has('flash_message'))
                                      <div class="alert alert-success text-green" style="color:green">
                                          {!!Session::get('flash_message')!!}
                                      </div>
                                  @endif
                                   <form id="example-form" action="/article/{{$data->id}}" method="POST" autocomplete="off">

                                  <div class="row">
                                      <div class="input-field col s12">
                                          <label for="judul">Judul</label>
                                          <input id="judul" name="judul" type="text" class="required validate" value="{{ $data->judul!=null ? $data->judul : old('judul') }}" autofocus>
                                      </div>

                                      <div class="input-field col s12">
                                          <textarea class="editor" id="first" name = "content" placeholder="Tulis disini...">{{ $data->content!=null ? $data->content : old('content') }}</textarea>
                                      </div>
                                      &nbsp;
                                      <div class="col s12">
                                          <label for="articleImg">Gambar Artikel atau Kegiatan</label>
                                              <div class="file-field input-field">
                                                  <div class="btn teal lighten-1">
                                                      <span>File</span>
                                                      <input type="file" multiple name="image">
                                                  </div>
                                                  <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                                  </div>
                                              </div>
                                      </div>


                                      <div class="col m12">
                                        <br/>
                                        <div class="right">
                                          <a href="{{ url('/article') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                          {{ csrf_field() }}
                                          <input type="hidden" name="_method" value="put">
                                          <button type="submit" class="waves-effect waves-light btn m-b-xs"><i class="material-icons right">done</i>Simpan</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                            </section>
                         </div>
              </div>
          </div>
      </div>
    </div>
@endsection
