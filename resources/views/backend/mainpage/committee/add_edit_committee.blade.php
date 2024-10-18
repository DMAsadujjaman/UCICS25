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
                                        Edit Committee Member
                                    @else
                                        Add Committee Member
                                    @endif
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('committees.view') }}"><i
                                            class="fa fa-list"></i> Member
                                        List</a>
                                </h3>
                            </div><!-- /.card-header -->

                            <div class="card-body">
                                <form method="POST"
                                    action="{{ @$editData ? route('committees.update', $editData->id) : route('committees.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ @$editData->id }}">

                                    <div class="card-body">
                                        <h2 style="padding-bottom: 40px;">Member Info</h2>

                                        <div class="form-row">


                                            <div class="form-group col-md-12">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control form-control-sm" name="title"
                                                    value="{{ @$editData['title'] }}" placeholder="Enter Title">
                                                <!-- <font style="color: red;">{{ $errors->has('title') ? $errors->first('title') : '' }}
                                                            </font> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="name">Column left <font style="color: red;">*</font></label>
                                                <input type="text" class="form-control form-control-sm" name="name"
                                                    value="{{ @$editData['name'] }}" placeholder="Enter name">
                                                <!-- <font style="color: red;">{{ $errors->has('name') ? $errors->first('subtitle') : '' }}
                                                            </font> -->
                                            </div>


                                            <div class="form-group col-md-12">
                                                <label for="affiliation">Column Right<font style="color: red;">*</font>
                                                    </label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="affiliation" value="{{ @$editData['affil'] }}"
                                                    placeholder="Enter Affiliation">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="committee">Committee <font style="color: red;">*</font></label>
                                                <select class="form-control form-control-sm" name="committee" id="committee"
                                                    required>
                                                    <option value="">Select Committee</option>
                                                    <option value="Organizing Committee"
                                                        {{ @$editData['committee'] == 'Organizing Committee' ? 'selected' : '' }}>
                                                        Organizing Committee</option>
                                                    <option value="Advisory Committee"
                                                        {{ @$editData['committee'] == 'Advisory Committee' ? 'selected' : '' }}>
                                                        Advisory Committee</option>
                                                    <option value="Technical Committee"
                                                        {{ @$editData['committee'] == 'Technical Committee' ? 'selected' : '' }}>
                                                        Technical Committee</option>
                                                    <option value="Publication Committee"
                                                        {{ @$editData['committee'] == 'Publication Committee' ? 'selected' : '' }}>
                                                        Publication Committee</option>
                                                    <option value="Registration Committee"
                                                        {{ @$editData['committee'] == 'Registration Committee' ? 'selected' : '' }}>
                                                        Registration Committee</option>
                                                </select>

                                                <!-- <font style="color: red;">{{ $errors->has('committee') ? $errors->first('committee') : '' }}</font> -->
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="priority">Priority<font style="color: red;">*</font>
                                                    </label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="priority" value="{{ @$editData['priority'] }}"
                                                    placeholder="Enter Priority">
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
