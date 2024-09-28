@extends('backend.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Download Section</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Download Section</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <section class="col-lg-12">


        <div class="card">
          <div class="card-header">
            <h3>Download List<a class="btn btn-success float-right btn-sm" href="{{ route('download.add') }}"><i
                  class="fa fa-plus-circle"></i> Add Download</a></h3>
          </div>


          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>file</th>
                  <th>menu</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($downloads as $key => $down)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$down->file}}</td>
                  <td>{{$down->menu}}</td>


                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('download.edit',$down->id) }}"><i
                        class="fa fa-edit"></i> </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('download.delete',$down->id) }}"><i
                        class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>





      </section>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection