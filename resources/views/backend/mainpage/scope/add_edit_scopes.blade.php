@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Scopes</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    @if (isset($editData))
                                        Edit Scopes
                                    @else
                                        Add Scopes
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('scopes.view') }}"><i
                                            class="fa fa-list"></i> Scopes
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('scopes.update', $editData->id) : route('scopes.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ @$editData->id }}">

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 40px;">Scopes Info</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-12">
                                                <label for="name">Title <font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="title"
                                                    value="{{ @$editData['title'] }}" placeholder="Enter Title">
                                               {{ $errors->has('title') ? $errors->first('title') : '' }}
                                                        
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="col_1">Column {{@$editData['id']}} Row 1 <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="col_1"
                                                    value="{{ @$editData['col_1'] }}" placeholder="Enter col_1">
                                                {{ $errors->has('col_1') ? $errors->first('col_1') : '' }}        
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="col_2">Column {{@$editData['id']}} Row 2 <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="col_2"
                                                    value="{{ @$editData['col_2'] }}" placeholder="Enter col_2">
                                                {{ $errors->has('col_2') ? $errors->first('col_2') : '' }}        
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="col_3">Column {{@$editData['id']}} Row 3 <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="col_3"
                                                    value="{{ @$editData['col_3'] }}" placeholder="Enter col_3">
                                                {{ $errors->has('col_3') ? $errors->first('col_3') : '' }}        
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="float-right">
                                        <button type="submit"
                                            class="btn btn-primary">{{ @$editData ? 'Update' : 'Submit' }}</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- /.content-wrapper -->
<script>
    $(function() {

        $('#myForm').validate({
            rules: {

                title: {

                },
                col_1: {


                },
                col_2: {


                },
                col_3: {


                },

            },
            messages: {

                title: {

                },

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
