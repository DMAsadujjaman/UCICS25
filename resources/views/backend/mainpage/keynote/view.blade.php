@extends('backend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">About Section</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">About Section</li>
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


                  <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          {{-- <th>SL</th> --}}
                          <th>Title</th>
                          <th>About</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach($about as $key => $about) --}}
                        <tr>
                          {{-- <td>{{$key+1}}</td> --}}
                          <td>{{$about->title}}</td>
                          <td>{{$about->about}}</td>

                          <td >
                            <a class="btn btn-primary btn-sm"
                                              href="{{ route('about.edit',$about->id) }}"><i class="fa fa-edit"></i> </a>
                            {{-- <a class="btn btn-danger btn-sm"
                                              href="{{ route('slider.delete',$about->id) }}"><i class="fa fa-trash"></i> </a> --}}
                          </td>
                        </tr>
                        {{-- @endforeach --}}
                        </tbody>

                      </table>











                      
                    </div>
                  <!-- /.card-body -->
                </div>
              </section>
            </div>
        </section>
        <!-- /.content -->


        <section class="content">
          <div class="row">
              <section class="col-lg-12">


              <div class="card">
                {{-- <div class="card-header">
                  <h3>About<a class="btn btn-success float-right btn-sm"href="{{ route('slider.add') }}"><i class="fa fa-plus-circle"></i> Add Slider</a></h3>
                </div> --}}


                <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        {{-- <th>SL</th> --}}
                        <th>Paper Submission:</th>
                        <th>Notification of Acceptance:</th>
                        <th>Camera-Ready Paper Submission:</th>
                        <th>Registration:</th>
                        <th>Conference Date:</th>

                        <th>Paper Submission Final:</th>
                        <th>Notification of Acceptance Final:</th>
                        <th>Camera-Ready Paper Submission Final:</th>
                        <th>Registration Final:</th>
                        <th>Conference Date Final:</th>

                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($about as $key => $about) --}}
                      <tr>
                        {{-- <td>{{$key+1}}</td> --}}
                        <td>{{$about->submission_date}}</td>
                        <td>{{$about->acceptance_date}}</td>
                        <td>{{$about->cam_submission_date}}</td>
                        <td>{{$about->registration_date}}</td>
                        <td>{{$about->conference_date}}</td>

                        <td>{{$about->submission_date_final}}</td>
                        <td>{{$about->acceptance_date_final}}</td>
                        <td>{{$about->cam_submission_date_final}}</td>
                        <td>{{$about->registration_date_final}}</td>
                        <td>{{$about->conference_date_final}}</td>

                        

                        <td >
                          <a class="btn btn-primary btn-sm"
                                            href="{{ route('date.edit',$about->id) }}"><i class="fa fa-edit"></i> </a>
                          {{-- <a class="btn btn-danger btn-sm"
                                            href="{{ route('slider.delete',$about->id) }}"><i class="fa fa-trash"></i> </a> --}}
                        </td>
                      </tr>
                      {{-- @endforeach --}}
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
