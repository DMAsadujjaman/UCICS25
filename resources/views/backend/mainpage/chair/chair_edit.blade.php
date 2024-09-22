@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Chair</h1>
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
                                        Edit chair
                                    @else
                                        Add chair
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('chair.view') }}"><i
                                            class="fa fa-list"></i> Chair
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('chair.update', $editData->id) : route('chair.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ @$editData->id }}">

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 20px;">Chair Person Info:</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-12">
                                                <label for="name">Name:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="name"
                                                    value="{{ @$editData['name'] }}" placeholder="Enter Name">
                                                <!-- <font style="color: red;">{{ $errors->has('name') ? $errors->first('name') : '' }}
                                                        </font> -->
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="name">Position:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="position"
                                                    value="{{ @$editData['position'] }}" placeholder="Enter position">
                                                <!-- <font style="color: red;">{{ $errors->has('position') ? $errors->first('position') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Department:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="dept"
                                                    value="{{ @$editData['dept'] }}" placeholder="Enter dept">
                                                <!-- <font style="color: red;">{{ $errors->has('dept') ? $errors->first('dept') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Address:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="address"
                                                    value="{{ @$editData['address'] }}" placeholder="Enter address">
                                                <!-- <font style="color: red;">{{ $errors->has('address') ? $errors->first('address') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Email:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="email"
                                                    value="{{ @$editData['email'] }}" placeholder="Enter email">
                                                <!-- <font style="color: red;">{{ $errors->has('email') ? $errors->first('email') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Extra:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="extra"
                                                    value="{{ @$editData['extra'] }}" placeholder="Enter extra">
                                                <!-- <font style="color: red;">{{ $errors->has('extra') ? $errors->first('extra') : '' }}
                                                        </font> -->
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



            },
            messages: {



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
