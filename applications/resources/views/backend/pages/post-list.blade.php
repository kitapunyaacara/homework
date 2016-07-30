@extends('backend.layouts.master')

@section('title')
  <title>Admin Dashboard</title>
@stop

@section('breadcrumb')
  <h1>
    Post List
    <small><a href="{{ url('admin/posting/create') }}"><button class="btn btn-block btn-success btn-sm">Add</button></a></small>
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
    <div class="col-xs-12">
      <div class="box box-success box-solid">
        <div class="box-header">
          <h3 class="box-title">Post List</h3>
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
                <th>Judul</th>
                <th>Author</th>
                <th>Kategori</th>
                <th>Publish</th>
                <th>Tags</th>
                <th colspan="2">Action</th>
              </tr>
              @foreach ($getPost as $post)
              <tr>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->nama_kategori }}</td>
                <td>@if($post->publish == 1)
                    <span class="label label-success">Yes</span>
                  @else
                    <span class="label label-danger">No</span>
                  @endif
                </td>
                <td>{{ $post->tags }}</td>
                <td>Ubah</td>
                <td>Lihat</td>
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
