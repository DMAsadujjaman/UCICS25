@extends('backend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Keynote Speaker Section</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Keynote Speaker Section</li>
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
                <h3>Speaker List<a class="btn btn-success float-right btn-sm"
                                        href="{{ route('kns.add') }}"><i class="fa fa-plus-circle"></i> Add Speaker</a></h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>name</th>
                    <th>Designation</th>
                    <th>about</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $kns)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$kns->name}}</td>
                    <td>{{$kns->designation}}</td>
                    <td>{{$kns->about}}</td>
                    
                    {{--  <td>{{$kns->image}}</td>  --}}
                    <td><img src="{{(!empty($kns->image))? url(asset('public/img/').$kns->image):url('public/img/carousel-1.jpg')}}"
                                                width="100px" height="100px" alt=""></td>
                    <td >
                      <a class="btn btn-primary btn-sm"
                                        href="{{ route('kns.edit',$kns->id) }}"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger btn-sm"
                                        href="{{ route('kns.delete',$kns->id) }}"><i class="fa fa-trash"></i> </a>
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
