@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Contacts</h1>
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
                                Edit Contacts
                                @endif
                                <a class="btn btn-success float-right btn-sm" href="{{ route('contact.view') }}"><i
                                        class="fa fa-list"></i> Contacts
                                    List</a>
                            </h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST"
                                action="{{ @$editData ? route('contact.update', $editData->id) : route('contact.store') }}"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ @$editData->id }}">

                                <div class="card-body">
                                    <h2 style="padding-bottom: 40px;">Contacts Info</h2>

                                    <div class="form-row">

                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label for="image">Logo <font style="color: red;">*</font></label>
                                                <input type="file" class="form-control form-control-sm" name="image"
                                                    id="image" placeholder="Upload Image"
                                                    value="{{ @$editData['image'] }}">

                                            </div>
                                            <!-- {{ url('public/upload/no_image.png') }} -->
                                            <div class="form-group col-md-4">

                                                <img src="{{ !empty(@$editData['image']) ? url(asset('public/img/') . @$editData['image']) : url('public/img/carousel-1.jpg') }}"
                                                    id="showImage" alt="profile picture"
                                                    style="height: 80px; width: 80px; border: 1px solid #000;">
                                            </div>

                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="name">Address</label>
                                            <input type="text" class="form-control form-control-sm" name="address"
                                                value="{{ @$editData['address'] }}" placeholder="Enter address">
                                            {{ $errors->has('address') ? $errors->first('address') : '' }}
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Email</label>
                                            <input type="email" class="form-control form-control-sm" name="email"
                                                value="{{ @$editData['email'] }}" placeholder="Enter email">
                                            {{ $errors->has('email') ? $errors->first('email') : '' }}
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Facebook</label>
                                            <input type="fb" class="form-control form-control-sm" name="fb"
                                                value="{{ @$editData['fb'] }}" placeholder="Enter fb">
                                            {{ $errors->has('fb') ? $errors->first('fb') : '' }}
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Instagram</label>
                                            <input type="text" class="form-control form-control-sm" name="insta"
                                                value="{{ @$editData['insta'] }}" placeholder="Enter insta">
                                            {{ $errors->has('insta') ? $errors->first('insta') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">mobile</label>
                                            <input type="tel" class="form-control form-control-sm" name="mobile"
                                                value="{{ @$editData['mobile'] }}" placeholder="Enter mobile">
                                            {{ $errors->has('mobile') ? $errors->first('mobile') : '' }}  
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Youtube</label>
                                            <input type="text" class="form-control form-control-sm" name="youtube"
                                                value="{{ @$editData['youtube'] }}" placeholder="Enter youtube">
                                            {{ $errors->has('youtube') ? $errors->first('youtube') : '' }}  
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Map</label>
                                            <input type="text" class="form-control form-control-sm" name="map"
                                                value="{{ @$editData['map'] }}" placeholder="Enter map">
                                            {{ $errors->has('map') ? $errors->first('map') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">About Logo</label>
                                            <input type="text" class="form-control form-control-sm" name="aboutlogo"
                                                value="{{ @$editData['aboutlogo'] }}" placeholder="Enter aboutlogo">
                                            {{ $errors->has('aboutlogo') ? $errors->first('aboutlogo') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Rights</label>
                                            <input type="text" class="form-control form-control-sm" name="rights"
                                                value="{{ @$editData['rights'] }}" placeholder="Enter rights">
                                            {{ $errors->has('rights') ? $errors->first('rights') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Name</label>
                                            <input type="text" class="form-control form-control-sm" name="contact_name"
                                                value="{{ @$editData['contact_name'] }}" placeholder="Enter contact_name">
                                            {{ $errors->has('contact_name') ? $errors->first('contact_name') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Dept.</label>
                                            <input type="text" class="form-control form-control-sm" name="cdept"
                                                value="{{ @$editData['cdept'] }}" placeholder="Enter Contact Dept.">
                                            {{ $errors->has('cdept') ? $errors->first('cdept') : '' }}  
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Telephone</label>
                                            <input type="tel" class="form-control form-control-sm" name="ctel"
                                                value="{{ @$editData['ctel'] }}" placeholder="Enter Contact Telephone">
                                            {{ $errors->has('ctel') ? $errors->first('ctel') : '' }}  
                                        </div>

                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Email</label>
                                            <input type="email" class="form-control form-control-sm" name="cmail"
                                                value="{{ @$editData['cmail'] }}" placeholder="Enter Contact Email">
                                            {{ $errors->has('cmail') ? $errors->first('cmail') : '' }}  
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