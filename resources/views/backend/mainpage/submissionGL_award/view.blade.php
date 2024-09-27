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
            @if ($sgl->page == 'SGL')
            <li class="breadcrumb-item active">Submission Guide Line </li>
            @else
            <li class="breadcrumb-item active">Student Paper Award</li>
            @endif
            
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
            @if ($sgl->page == 'SGL')
            <h3>Submission Guide Line</h3>
            @else
            <h3>Student Paper Award</h3>
            @endif

          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>

                <tr>
                  <th>Sl</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Details_1</th>
                  <th>Details_2</th>
                  <th>Details_3</th>
                  <th>Image_1</th>
                  <th>Image_2</th>
                  <th>Action</th>
                </tr>

              </thead>
              <tbody>
                @foreach($submissionGL as $key => $submission)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$submission->title}}</td>
                  <td>{{$submission->image_1}}</td>
                  <td> {{ \Illuminate\Support\Str::limit($submission->text_1, 100, '...') }}</td>
                  <td>{{ \Illuminate\Support\Str::limit($submission->text_2, 100, '...') }}</td>
                  <td>{{ \Illuminate\Support\Str::limit($submission->text_3, 100, '...') }}</td>
                  <td>{{$submission->image_2}}</td>
                  <td>{{$submission->image_3}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('submission.edit',$submission->id) }}"><i
                        class="fa fa-edit"></i> </a>

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