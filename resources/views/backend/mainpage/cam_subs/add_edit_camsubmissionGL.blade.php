@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        
                        <div class="card-header">
                            <h3>
                                @if (isset($editData))
                                  
                                        <h3>Edit Cam Submission Guideline</h3>
                                        <a class="btn btn-success float-right btn-sm" href="{{ route('cam_submission.view') }}">
                                            <i class="fa fa-list"></i> List
                                        </a>
                                @else
                                        <h3>Add Submission Guide Line</h3>
                                @endif
                            </h3>
                        </div>
                        
                        <!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST"
                                action="{{ @$editData ? route('cam_submission.update', $editData->id) : route('cam_submission.store') }}"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ @$editData->id }}">

                                <div class="card-body">

                                    @if ($editData->page == 'SGL')
                                    <h2 style="padding-bottom: 40px;">Submission Guideline Info</h2>
                                    @else
                                    <h2 style="padding-bottom: 40px;">Student Award Info</h2>
                                    @endif
                                    <div class="form-row">


                                        <div class="form-group col-md-12">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control form-control-sm" name="title"
                                                value="{{ @$editData['title'] }}" placeholder="Enter Title">
                                            {{ $errors->has('title') ? $errors->first('title') : '' }}

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image_1">Image <font style="color: red;">*</font></label>
                                                <input type="file" class="form-control form-control-sm" name="image_1"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['image_1'] }}">

                                            </div>
                                            <div class="form-group col-md-3">

                                                <img src="{{ !empty(@$editData['image_1']) ? url(asset('public/img/') . @$editData['image_1']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

                                        </div>



                                        <div class="form-group col-md-12">
                                            <label for="text_1">Text_1<font style="color: red;">*</font></label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text_1"
                                                placeholder="Enter text_1">{{ @$editData['text_1'] }}</textarea>
                                            {{ $errors->has('text_1') ? $errors->first('text_1') : '' }}

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image">Image 2 </label>
                                                <input type="file" class="form-control form-control-sm" name="image_2"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['image_2'] }}">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <img src="{{ !empty(@$editData['image_2']) ? url(asset('public/img/') . @$editData['image_2']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="text_2">Text_2</label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text_2"
                                                placeholder="Enter text_2">{{ @$editData['text_2'] }}</textarea>
                                            <!-- <font style="color: red;">{{ $errors->has('text_2') ? $errors->first('text_2') : '' }}
                                                        </font> -->
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image">Image 3 </label>
                                                <input type="file" class="form-control form-control-sm" name="image_3"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['image_3'] }}">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <img src="{{ !empty(@$editData['image_3']) ? url(asset('public/img/') . @$editData['image_3']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="text_3">Text_3</label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text_3"
                                                placeholder="Enter text_3">{{ @$editData['text_3'] }}</textarea>
                                            <!-- <font style="color: red;">{{ $errors->has('text_3') ? $errors->first('text_3') : '' }}
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