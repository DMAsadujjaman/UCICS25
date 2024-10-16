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
            <li class="breadcrumb-item active">Registration</li>
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
        
            <h3>Registration<a class="btn btn-success float-right btn-sm" href="{{ route('register.add') }}"><i
                  class="fa fa-plus-circle"></i> Add Registration info</a></h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>



              </thead>
              <tbody>
                <tr>
                  <th>Sl</th>
                  <th>Table_title</th>
                  <th>category</th>
                  <th>international</th>
                  <th>national</th>
                  <th>note</th>
                  <th>link</th>
                </tr>

                @foreach($registers as $key => $register)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$register->table_title}}</td>
                  <td>{{$register->cat}}</td>
                  <td> {{ $register->int}}</td>
                  <td> {{ $register->nat}}</td>
                  <td> {{ $register->note}}</td>
                  <td> {{ $register->link}}</td>

                </tr>
                @endforeach
                <tr>
                  <th>Sl</th>
                  <th>Title</th>
                  <th>Text_1</th>
                  <th>Text_2</th>
                  <th>Text_3</th>
                  <th>Text_4</th>
                  <th>Image_1</th>
                  <th>Image_2</th>
                  <th>Action</th>
                </tr>
                @foreach($registers as $key => $register)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$register->title}}</td>
                  <td> {{ $register->text1}}</td>
                  <td> {{ $register->text2}}</td>
                  <td> {{ $register->text3}}</td>
                  <td> {{ $register->text4}}</td>
                  <td>{{$register->img1}}</td>
                  <td>{{$register->img2}}</td>

                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('register.edit',$register->id) }}"><i
                        class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm"
                        href="{{ route('register.delete',$register->id) }}"><i class="fa fa-trash"></i> </a>

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