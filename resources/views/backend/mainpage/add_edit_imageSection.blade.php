@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Slides</h1>
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
                                        Edit slider
                                    @else
                                        Add slider
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('slider') }}"><i
                                            class="fa fa-list"></i> slider
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('slider.update', $editData->id) : route('') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ @$editData->id }}">

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 40px;">Slider Info</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-12">
                                                <label for="name">Title <font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="title"
                                                    value="{{ @$editData['title'] }}" placeholder="Enter Title">
                                                <!-- <font style="color: red;">{{ $errors->has('title') ? $errors->first('title') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="subtitle">Subtitle <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="subtitle"
                                                    value="{{ @$editData['subTitle'] }}" placeholder="Enter Subtitle">
                                                <!-- <font style="color: red;">{{ $errors->has('subtitle') ? $errors->first('subtitle') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="date">Date</label>
                                                <input type="text" class="form-control form-control-sm" name="date"
                                                    value="{{ @$editData['date'] }}" placeholder="Enter Date">
                                                <font style="color: red;">
                                                    {{ $errors->has('date') ? $errors->first('date') : '' }}
                                                </font>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control form-control-sm" name="address"
                                                    value="{{ @$editData['location'] }}" placeholder="Enter Address">
                                            </div>






                                        </div>


                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="image">Image <font style="color: red;">*</font></label>
                                                <input type="file" class="form-control form-control-sm" name="image"
                                                    id="image" placeholder="Upload Image" value="{{ @$editData['image'] }}">

                                            </div>
                                            <!-- {{ url('public/upload/no_image.png') }} -->
                                            <div class="form-group col-md-5">

                                                <img src="{{ !empty(@$editData['image']) ? url(asset('public/img/') . @$editData['image']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 200px; width: 500px; border: 1px solid #000;">
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
                    required: true,
                },
                subtitle: {
                    required: true,

                },
                date: {
                    required: true,

                },
                address: {
                    required: true,

                },

            },
            messages: {

                title: {
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
