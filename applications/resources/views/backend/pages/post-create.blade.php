@extends('backend.layouts.master')

@section('title')
  <title>Admin Dashboard</title>
@stop

@section('headscript')
<link rel="stylesheet" href="{{asset('/back/css/bootstrap-tagsinput.css')}}">
@stop

@section('breadcrumb')
  <h1>
    Post List
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Post</li>
  </ol>
@stop

@section('content')
  <script>
    window.setTimeout(function() {
      $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
    }, 2000);

    window.setTimeout(function() {
      $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
    }, 5000);
  </script>
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif

      @if(Session::has('messagefail'))
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Oops, terjadi kesalahan!</h4>
          <p>{{ Session::get('messagefail') }}</p>
        </div>
      @endif
    </div>
    <div class="col-md-12">
      <form class="form-horizontal"
        @if(isset($editpost))
          action="{{route('admin.posting.update')}}"
        @else
          action="{{route('admin.posting.post')}}"
        @endif
      method="post" style="margin-top:10px;" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="box box-success box-solid">
          <div class="box-header">
            @if(isset($editpost))
              <h3 class="box-title">Form Edit Posting</h3>
            @else
              <h3 class="box-title">Form Tambah Posting Baru</h3>
            @endif
          </div><!-- /.box-header -->
          <div class="box-body">
              <div class="form-group {{ $errors->has('judul') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Judul Konten</label>
                <div class="col-sm-5">
                  @if(isset($editpost))
                    <input type="hidden" name="id" value="{{$editpost->id}}">
                  @endif
                  <input type="text" class="form-control" name="judul"
                    @if(isset($editpost))
                      value="{{$editpost->judul}}"
                    @endif
                  >
                  @if($errors->has('judul'))
                   <span class="help-block">
                     <strong>{{ $errors->first('judul')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group {{ $errors->has('kategori_id') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-3">
                  <select class="form-control" name="kategori_id">
                    <option>-- Pilih --</option>
                      @if(!$getkategori->isEmpty())
                        @if(isset($editpost))
                          @foreach($getkategori as $key)
                            @if($editpost->kategori_id==$key->id)
                              <option value="{{$key->id}}" selected="true">{{$key->nama_kategori}}</option>
                            @else
                              <option value="{{$key->id}}">{{$key->nama_kategori}}</option>
                            @endif
                          @endforeach
                        @else
                          @foreach($getkategori as $key)
                            <option value="{{$key->id}}">{{$key->nama_kategori}}</option>
                          @endforeach
                        @endif
                      @endif
                  </select>
                  @if($getkategori->isEmpty())
                    <span style="color:red;">* Anda belum memiliki kategori</span>
                  @endif
                  @if($errors->has('kategori_id'))
                   <span class="help-block">
                     <strong>{{ $errors->first('kategori_id')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group {{ $errors->has('tanggal_event') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Tanggal Acara</label>
                <div class="col-sm-3">
                  <input type="date" class="form-control" name="tanggal_event" id="datepicker">
                  @if($errors->has('tanggal_event'))
                   <span class="help-block">
                     <strong>{{ $errors->first('tanggal_event')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Foto Header</label>
                <div class="col-sm-3">
                  <input type="file" class="form-control" name="image">
                  @if(isset($editpost))
                    <span style="color:red;">* Biarkan kosong jika tidak ingin diganti.</span>
                  @endif
                  @if($errors->has('image'))
                   <span class="help-block">
                     <strong>{{ $errors->first('image')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group {{ $errors->has('thumb') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Foto Thumb</label>
                <div class="col-sm-3">
                  <input type="file" class="form-control" name="thumb">
                  @if(isset($editpost))
                    <span style="color:red;">* Biarkan kosong jika tidak ingin diganti.</span>
                  @endif
                  @if($errors->has('thumb'))
                   <span class="help-block">
                     <strong>{{ $errors->first('thumb')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Tags</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="tags" data-role="tagsinput" id="tagsinput"
                    @if(isset($editpost))
                      value="{{$editpost->tags}}"
                    @endif
                  >
                  @if($errors->has('tags'))
                   <span class="help-block">
                     <strong>{{ $errors->first('tags')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Publish</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="flat-red"
                    @if(isset($editpost))
                      @if($editpost->publish=="1")
                        checked
                      @endif
                    @endif
                   name="publish" value="1">
                  <span class="text-muted">&nbsp;&nbsp;* Ya, Publish Posting Ini</span>
                </div>
              </div>
              <div class="form-group {{ $errors->has('konten') ? 'has-error' : ''}}">
                <label class="col-sm-2 control-label">Isi Konten</label>
                <div class="col-sm-9">
                  <textarea name="konten" id="konten">
                    @if(isset($editpost))
                      {{$editpost->konten}}
                    @endif
                  </textarea>
                  @if($errors->has('konten'))
                   <span class="help-block">
                     <strong>{{ $errors->first('konten')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right btn-flat">Simpan</button>
            <button type="reset" class="btn btn-default pull-right btn-flat" style="margin-right:5px;">Reset Form</button>
          </div>
        </div><!-- /.box -->
      </form>
    </div>
  </div>
@stop
@section('script')
<!-- Tags Input -->
<script src="{{asset('/back/js/bootstrap-tagsinput.js')}}"></script>

<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    CKEDITOR.replace('konten');
  });
  $('#tagsinput').tagsinput();
  $('#datepicker').datepicker3();
</script>
@stop
