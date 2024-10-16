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

                                <h3>Edit Registration</h3>
                                <a class="btn btn-success float-right btn-sm" href="{{ route('register.view') }}">
                                    <i class="fa fa-list"></i> List
                                </a>
                                @else
                                <h3>Registration</h3>
                                <a class="btn btn-success float-right btn-sm" href="{{ route('register.view') }}">
                                    <i class="fa fa-list"></i> List
                                </a>
                                @endif
                            </h3>
                        </div>

                        <!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST"
                                action="{{ @$editData ? route('register.update', $editData->id) : route('register.store') }}"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ @$editData->id }}">

                                <div class="card-body">


                                    <h2 style="padding-bottom: 40px;">Registration Info</h2>


                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control form-control-sm" name="title"
                                                value="{{ @$editData['title'] }}" placeholder="Enter title">
                                            {{ $errors->has('title') ? $errors->first('title') : '' }}
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="text1">Text1<font style="color: red;">*</font></label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text1"
                                                placeholder="Enter text1">{{ @$editData['text1'] }}</textarea>
                                            {{ $errors->has('text1') ? $errors->first('text1') : '' }}

                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="name">Table Title</label>
                                            <input type="text" class="form-control form-control-sm" name="table_title"
                                                value="{{ @$editData['table_title'] }}" placeholder="Enter table_title">
                                            {{ $errors->has('table_title') ? $errors->first('table_title') : '' }}
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Category</label>
                                            <input type="text" class="form-control form-control-sm" name="cat"
                                                value="{{ @$editData['cat'] }}" placeholder="Enter category">
                                            {{ $errors->has('category') ? $errors->first('category') : '' }}
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">International</label>
                                            <input type="text" class="form-control form-control-sm" name="int"
                                                value="{{ @$editData['int'] }}" placeholder="Enter international">
                                            {{ $errors->has('international') ? $errors->first('international') : '' }}
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">National</label>
                                            <input type="text" class="form-control form-control-sm" name="nat"
                                                value="{{ @$editData['nat'] }}" placeholder="Enter national">
                                            {{ $errors->has('national') ? $errors->first('national') : '' }}
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Note</label>
                                            <input type="text" class="form-control form-control-sm" name="note"
                                                value="{{ @$editData['note'] }}" placeholder="Enter note">
                                            {{ $errors->has('note') ? $errors->first('note') : '' }}
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="text2">Text2<font style="color: red;">*</font></label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text2"
                                                placeholder="Enter text2">{{ @$editData['text2'] }}</textarea>
                                            {{ $errors->has('text2') ? $errors->first('text2') : '' }}

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image_1">Image <font style="color: red;">*</font></label>
                                                <input type="file" class="form-control form-control-sm" name="img1"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['img1'] }}">

                                            </div>
                                            <div class="form-group col-md-3">

                                                <img src="{{ !empty(@$editData['img1']) ? url(asset('public/img/') . @$editData['image_1']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

                                        </div>



                                        <div class="form-group col-md-12">
                                            <label for="text3">Text3<font style="color: red;">*</font></label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text3"
                                                placeholder="Enter text3">{{ @$editData['text3'] }}</textarea>
                                            {{ $errors->has('text3') ? $errors->first('text3') : '' }}

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image">Image 2 </label>
                                                <input type="file" class="form-control form-control-sm" name="img2"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['img2'] }}">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <img src="{{ !empty(@$editData['img2']) ? url(asset('public/img/') . @$editData['img2']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="text4">Text4</label>
                                            <textarea rows="6" class="form-control form-control-sm" name="text4"
                                                placeholder="Enter text4">{{ @$editData['text4'] }}</textarea>
                                            <!-- <font style="color: red;">{{ $errors->has('text4') ? $errors->first('text4') : '' }}
                                                        </font> -->
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="name">link</label>
                                            <input type="text" class="form-control form-control-sm" name="link"
                                                value="{{ @$editData['link'] }}" placeholder="Enter link">
                                            {{ $errors->has('link') ? $errors->first('link') : '' }}
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