@extends('backend.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contact Section</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Section</li>
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
          {{-- <div class="card-header">
            <h3>Contact List<a class="btn btn-success float-right btn-sm" href="{{ route('Contact.add') }}"><i
                  class="fa fa-plus-circle"></i> Add Contact</a></h3>
          </div> --}}


          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                
                
              </thead>
              <tbody>
                <tr>
                  <th>logo</th>
                  <th>address</th>
                  <th>email</th>
                  <th>fb</th>
                  <th>insta</th>
                </tr>
                
                <tr>
                  <td>{{$contact->logo}}</td>
                  <td>{{$contact->address}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->fb}}</td>
                  <td>{{$contact->insta}}</td>
                </tr>
                <tr>
                  <th>mobile</th>
                  <th>youtube</th>
                  <th>map</th>
                  <th>about logo</th>
                  <th>rights</th>
                </tr>
                <tr>
                  <td>{{$contact->mobile}}</td>
                  <td>{{$contact->youtube}}</td>
                   <td>{{\Illuminate\Support\Str::limit($contact->map, 20, '...')}}</td>
                  <td>{{$contact->aboutlogo}}</td>
                  <td>{{$contact->rights}}</td>
                </tr>
                
                <tr>

                  <th>contact_name</th>
                  <th>cdept</th>
                  <th>ctel</th>
                  <th>cmail</th>
                  <th>Action</th>
                </tr>
                <tr>
                 
                  <td>{{$contact->contact_name}}</td>
                  <td>{{$contact->cdept}}</td>
                  <td>{{$contact->ctel}}</td>
                  <td>{{$contact->cmail}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('contact.edit',$contact->id) }}"><i
                        class="fa fa-edit"></i> </a>
                  </td>
                </tr>

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