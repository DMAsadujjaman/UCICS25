@extends('backend.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Keynote Speakers</h1>
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
                                        Edit Keynote Speaker
                                    @else
                                        Add Keynote Speaker
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('kns.view') }}"><i
                                            class="fa fa-list"></i> Keynote Speaker
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('kns.update', $editData->id) : route('kns.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 40px;">Speakers Info</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-12">
                                                <label for="name">Name <font style="color: red;">*</font>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" name="name"
                                                    value="{{ @$editData['name'] }}" placeholder="Enter name">
                                                <!-- <font style="color: red;">{{ $errors->has('title') ? $errors->first('title') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="designation">Designation <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="designation"
                                                    value="{{ @$editData['designation'] }}" placeholder="Enter designation">
                                                <!-- <font style="color: red;">{{ $errors->has('designation') ? $errors->first('designation') : '' }}
                                                        </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="about">About <font style="color: red;">*</font></label>
                                                {{-- <textarea type="description" rows="6" class="form-control form-control-sm" name="about"
                                                    value="{{ @$editData['about'] }}" placeholder="Enter About"></textarea> --}}
                                                    <textarea rows="6" class="form-control form-control-sm" name="about" placeholder="Enter About">{{ @$editData['about'] }}</textarea>
                                                <!-- <font style="color: red;">{{ $errors->has('about') ? $errors->first('about') : '' }}
                                                        </font> -->
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

                name: {
                    required: true,
                },


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
