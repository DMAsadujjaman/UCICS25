@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Manage Committee Members</h1> --}}
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
                                        <h3>Edit Sponsors</h3>
                                        <a class="btn btn-success float-right btn-sm" href="{{ route('sponsor.view') }}">
                                            <i class="fa fa-list"></i> Sponsor List
                                        </a>
                                @else
                                        <h3>Add Sponsor</h3>
                                @endif
                            </h3>
                        </div>
                        
                        <!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST"
                                action="{{ @$editData ? route('sponsor.update', $editData->id) : route('sponsor.store') }}"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ @$editData->id }}">

                                <div class="card-body">

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control form-control-sm" name="title"
                                                value="{{ @$editData['title'] }}" placeholder="Enter Title">
                                            {{ $errors->has('title') ? $errors->first('title') : '' }}

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Subtitle</label>
                                            <input type="text" class="form-control form-control-sm" name="subtitle"
                                                value="{{ @$editData['subtitle'] }}" placeholder="Enter subtitle">
                                            {{ $errors->has('subtitle') ? $errors->first('subtitle') : '' }}

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <label for="image_1">Image </label>
                                                <input type="file" class="form-control form-control-sm" name="image"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['image'] }}">

                                            </div>
                                            <div class="form-group col-md-3">
                                                <img src="{{ !empty(@$editData['image']) ? url(asset('public/img/') . @$editData['image']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 100px; width: 300px; border: 1px solid #000;">
                                            </div>

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