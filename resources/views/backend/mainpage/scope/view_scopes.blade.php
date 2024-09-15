@extends('backend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Scope Section</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Scope Section</li>
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
                <h3>Scopes<a class="btn btn-success float-right btn-sm"
                                        href="{{ route('scopes.create') }}"><i class="fa fa-plus-circle"></i> Add Slider</a></h3>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Col 1</th>
                    <th>Col 2</th>
                    <th>Col 3</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($scopes as $key => $scope)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$scope->title}}</td>
                    <td>{{$scope->col_1}}</td>
                    <td>{{$scope->col_2}}</td>
                    <td>{{$scope->col_3}}</td>

                    <td >
                      <a class="btn btn-primary btn-sm"
                                        href="{{ route('scopes.edit',$scope->id) }}"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger btn-sm"
                                        href="{{ route('scopes.delete',$scope->id) }}"><i class="fa fa-trash"></i> </a>
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
