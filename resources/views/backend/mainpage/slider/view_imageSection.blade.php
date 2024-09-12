@extends('backend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Image Section</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Image Section</li>
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
                <h3>Sliders<a class="btn btn-success float-right btn-sm"
                                        href="{{ route('slider.add') }}"><i class="fa fa-plus-circle"></i> Add Slider</a></h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $welcome)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$welcome->title}}</td>
                    <td>{{$welcome->subTitle}}</td>
                    <td>{{$welcome->date}}</td>
                    <td>{{$welcome->location}}</td>
                    {{--  <td>{{$welcome->image}}</td>  --}}
                    <td><img src="{{(!empty($welcome->image))? url(asset('public/img/').$welcome->image):url('public/img/carousel-1.jpg')}}"
                                                width="300px" height="100px" alt=""></td>
                    <td >
                      <a class="btn btn-primary btn-sm"
                                        href="{{ route('slider.edit',$welcome->id) }}"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger btn-sm"
                                        href="{{ route('slider.delete',$welcome->id) }}"><i class="fa fa-trash"></i> </a>
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
