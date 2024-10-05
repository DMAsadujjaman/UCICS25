@extends('backend.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Downloads</h1>
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
                                Edit Downloads
                                @else
                                Add Downloads
                                @endif
                                <a class="btn btn-success float-right btn-sm" href="{{ route('download.view') }}"><i
                                        class="fa fa-list"></i> Downloads
                                    List</a>
                            </h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST"
                                action="{{ @$editData ? route('download.update', $editData->id) : route('download.store') }}"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ @$editData->id }}">

                                <div class="card-body">
                                    <h2 style="padding-bottom: 40px;">Downloads Info</h2>

                                    <div class="form-row">


                                      

                                        <div class="form-group col-md-12">
                                            <label for="menu">menu <font style="color: red;">*</font></label>
                                            <select class="form-control form-control-sm" name="menu" id="menu" required>
                                                <option value="">Select menu</option>
                                                <option value="Conference Flyers" {{ @$editData['menu'] == 'Conference Flyers' ? 'selected' : '' }}>Conference Flyers</option>
                                                <option value="Word Template" {{ @$editData['menu'] == 'Word Template' ? 'selected' : '' }}>Word Template</option>
                                                <option value="LaTeX Template" {{ @$editData['menu'] == 'LaTeX Template' ? 'selected' : '' }}>LaTeX Template</option>

                                                <option value="Submission Guideline" {{ @$editData['menu'] == 'Submission Guideline' ? 'selected' : '' }}>Submission Guideline</option>
                                                <option value="Camera Ready Submission Guideline" {{ @$editData['menu'] == 'Camera Ready Submission Guideline' ? 'selected' : '' }}>Camera Ready Submission Guideline</option>

                                                <option value="Conference Poster" {{ @$editData['menu'] == 'Conference Poster' ? 'selected' : '' }}>Conference Poster</option>
                                                <option value="Program Booklet" {{ @$editData['menu'] == 'Program Booklet' ? 'selected' : '' }}>Program Booklet</option>
                                                <option value="Developing the Presentation" {{ @$editData['menu'] == 'Developing the Presentation' ? 'selected' : '' }}>Developing the Presentation</option>
                                            </select>
                                            <!-- You can still use font for error messages if needed -->
                                            <!-- <font style="color: red;">{{ $errors->has('menu') ? $errors->first('menu') : '' }}</font> -->
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="file">File<font style="color: red;">*</font></label>
                                                <input type="file" class="form-control form-control-sm" name="file"
                                                    id="image" placeholder="Upload File"
                                                    value="{{ @$editData['file'] }}">

                                            </div>
                                            <div class="form-group col-md-12">
                                                @if(!empty($editData['file']))
                                                <embed src="{{ public_path('file' . $editData['file']) }}" height="400px"
                                                    width="1000px" type="application/pdf">
                                                <p>{{ public_path('file' . $editData['file']) }}</p>
                                                <iframe src="{{ public_path('file' . $editData['file']) }}" height="400px"
                                                    width="1000px"></iframe>
                                                @endif
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