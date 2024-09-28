@extends('backend.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">sponsors</li>
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
            <h3>Sponsor<a class="btn btn-success float-right btn-sm" href="{{ route('sponsor.add') }}"><i
                  class="fa fa-plus-circle"></i> Add Sponsor</a></h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>

                <tr>
                  <th>Sl</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>

              </thead>
              <tbody>
                @foreach($sponsors as $key => $sponsor)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$sponsor->title}}</td>
                  <td>{{$sponsor->subtitle}}</td>
                  <td><img src="{{(!empty($sponsor->image))? url(asset('public/img/').$sponsor->image):url('public/img/carousel-1.jpg')}}"
                    width="100px" height="100px" alt=""></td>
                  

                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('sponsor.edit',$sponsor->id) }}"><i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm"
                                              href="{{ route('sponsor.delete',$sponsor->id) }}"><i
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