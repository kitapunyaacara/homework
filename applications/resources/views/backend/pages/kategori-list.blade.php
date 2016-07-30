@extends('backend.layouts.master')

@section('title')
  <title>Admin Dashboard</title>
@stop

@section('breadcrumb')
  <h1>
    Kategori List
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Kategori</li>
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
    <div class="col-xs-4">
        <div class="box box-success box-solid">
          <div class="box-header">
            @if(isset($editkategori))
              <h3 class="box-title">Form Edit Kategori</h3>
            @else
              <h3 class="box-title">Form Tambah Kategori Baru</h3>
            @endif
          </div><!-- /.box-header -->
          <div class="box-body">
            <form class="form-horizontal" @if(isset($editkategori)) action="{{route('admin.kategori.update')}}" @else action="{{route('admin.kategori.post')}}" @endif method="post" style="margin-top:10px;" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group {{ $errors->has('nama_kategori') ? 'has-error' : ''}}">
                <label class="col-sm-5 control-label">Nama Kategori</label>
                <div class="col-sm-5">
                  @if(isset($editkategori))
                    <input type="hidden" name="id" value="{{$editkategori->id}}">
                  @endif
                  <input type="text" class="form-control" name="nama_kategori"
                    @if(isset($editkategori))
                      value="{{$editkategori->nama_kategori}}"
                    @endif
                  >
                  @if($errors->has('nama_kategori'))
                   <span class="help-block">
                     <strong>{{ $errors->first('nama_kategori')}}
                     </strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Parent Kategori</label>
                <div class="col-sm-5">
                  <select class="form-control" name="parent_id">
                    <option>-- Pilih --</option>
                      @if(!$getKategori->isEmpty())
                        @if(isset($editkategori))
                          @foreach($getKategori as $key)
                            @if($editkategori->kategori_id==$key->id)
                              <option value="{{$key->id}}" selected="true">{{$key->nama_kategori}}</option>
                            @else
                              <option value="{{$key->id}}">{{$key->nama_kategori}}</option>
                            @endif
                          @endforeach
                        @else
                          @foreach($getKategori as $key)
                            <option value="{{$key->id}}">{{$key->nama_kategori}}</option>
                          @endforeach
                        @endif
                      @endif
                  </select>
                  @if($getKategori->isEmpty())
                    <span style="color:red;">* Anda belum memiliki kategori</span>
                  @endif
                </div>
              </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right btn-flat">Simpan</button>
            <button type="reset" class="btn btn-default pull-right btn-flat" style="margin-right:5px;">Reset Form</button>
          </div>
        </div>
      </form>
    </div>

    <div class="col-xs-8">
      <div class="box box-success box-solid">
        <div class="box-header">
          <h3 class="box-title">Kategori List</h3>
          <div class="box-tools">
            <div class="input-group" style="width: 150px;">
              <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
              <tr>
                <th>Id</th>
                <th>Nama Kategori</th>
                <th>Parent Id</th>
                <th colspan="2">Aksi</th>
              </tr>
              @foreach ($listKategori as $kategori)
              <tr>
                <td>{{ $kategori->id }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                  @if($kategori->parent_id == null)
                    -
                  @else
                    @foreach($getParent as $parent)
                        @if($parent->id == $kategori->parent_id)
                          {{ $parent->nama_kategori }}
                        @endif
                    @endforeach
                  @endif
                </td>
                <td>Status</td>
                <td>Ubah</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">

    </div>

    <div class="col-md-4">

    </div>
  </div>

  <div class="row">
    <section class="col-md-12">

    </section>
  </div><!-- /.row (main row) -->

@stop
