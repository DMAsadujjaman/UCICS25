@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Date</h1>
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
                                        Edit date
                                    @else
                                        Add date
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('about.view') }}"><i
                                            class="fa fa-list"></i> date
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('date.update', $editData->id) : route('date.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ @$editData->id }}">

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 20px;">Initial Date Info:</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-3">
                                                <label for="name">Paper Submission:<font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="submission_date"
                                                    value="{{ @$editData['submission_date'] }}" placeholder="Enter Submission_date">
                                                <!-- <font style="color: red;">{{ $errors->has('submission_date') ? $errors->first('submission_date') : '' }}
                                                        </font> -->
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="name">Notification of Acceptance:<font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="acceptance_date"
                                                    value="{{ @$editData['acceptance_date'] }}" placeholder="Enter acceptance_date">
                                                <!-- <font style="color: red;">{{ $errors->has('acceptance_date') ? $errors->first('acceptance_date') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="name">Camera-Ready Paper Submission:<font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="cam_submission_date"
                                                    value="{{ @$editData['cam_submission_date'] }}" placeholder="Enter cam_submission_date">
                                                <!-- <font style="color: red;">{{ $errors->has('cam_submission_date') ? $errors->first('cam_submission_date') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="name">Registration Date:<font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="registration_date"
                                                    value="{{ @$editData['registration_date'] }}" placeholder="Enter registration_date">
                                                <!-- <font style="color: red;">{{ $errors->has('registration_date') ? $errors->first('registration_date') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Conference Date:<font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="conference_date"
                                                    value="{{ @$editData['conference_date'] }}" placeholder="Enter conference_date">
                                                <!-- <font style="color: red;">{{ $errors->has('conference_date') ? $errors->first('conference_date') : '' }}
                                                        </font> -->
                                            </div>
                                        </div>
                                        <h2 style="padding-bottom: 20px;">Final Date(If needed):</h2>

                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-3">
                                                <label for="name">Paper Submission:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="submission_date_final"
                                                    value="{{ @$editData['submission_date_final'] }}" placeholder="Enter Submission_date_final">
                                                <!-- <font style="color: red;">{{ $errors->has('submission_date_final') ? $errors->first('submission_date_final') : '' }}
                                                        </font> -->
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="name">Notification of Acceptance:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="acceptance_date_final"
                                                    value="{{ @$editData['acceptance_date_final'] }}" placeholder="Enter acceptance_date_final">
                                                <!-- <font style="color: red;">{{ $errors->has('acceptance_date_final') ? $errors->first('acceptance_date_final') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="name">Camera-Ready Paper Submission:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="cam_submission_date_final"
                                                    value="{{ @$editData['cam_submission_date_final'] }}" placeholder="Enter cam_submission_date_final">
                                                <!-- <font style="color: red;">{{ $errors->has('cam_submission_date_final') ? $errors->first('cam_submission_date_final') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="name">Registration Date:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="registration_date_final"
                                                    value="{{ @$editData['registration_date_final'] }}" placeholder="Enter registration_date_final">
                                                <!-- <font style="color: red;">{{ $errors->has('registration_date_final') ? $errors->first('registration_date_final') : '' }}
                                                        </font> -->
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="name">Conference Date:
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="conference_date_final"
                                                    value="{{ @$editData['conference_date_final'] }}" placeholder="Enter conference_date_final">
                                                <!-- <font style="color: red;">{{ $errors->has('conference_date_final') ? $errors->first('conference_date_final') : '' }}
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

                submission_date: {
                    required: true,
                },
                acceptance_date: {
                    required: true,

                },
                cam_submission_date: {
                    required: true,

                },
                registration_date: {
                    required: true,

                },
                conference_date: {
                    required: true,

                },

            },
            messages: {

                submission_date: {
                    required: "Please enter Title",
                    unique: "Title Already Exists",

                },
                acceptance_date: {
                    required: "Please enter Title",
                    unique: "Title Already Exists",

                },
                cam_submission_date: {
                    required: "Please enter Title",
                    unique: "Title Already Exists",

                },
                registration_date: {
                    required: "Please enter Title",
                    unique: "Title Already Exists",

                },
                conference_date: {
                    required: "Please enter Title",
                    unique: "Title Already Exists",

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
