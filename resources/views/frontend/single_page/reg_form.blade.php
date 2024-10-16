@extends('frontend.master')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" style="height: 300px" src="{{ asset('public') }}/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 pt-5">
                                @foreach($regs as $reg)
                                @if(!empty($reg->title))
                                <h1 class="display-4 text-white mb-3 animated slideInDown">{!! $reg->title !!}</h1>
                                @break
                                @else
                                <h3>Registration</h3>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Carousel End -->
<!-- Service Start -->
<div id="submission" class="container-xxl py-5">
    <div class="container">

        <div class="row g-4 justify-content-center">

            <h3>Personal Info</h3>

            <div class="form-group col-md-12">
                <label for="name">Name<font style="color: red;">*</font></label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter name">
            </div>



            <div class="form-group col-md-6">
                <label for="name">University<font style="color: red;">*</font></label>
                <input type="text" class="form-control form-control-sm" name="university"
                    placeholder="Enter university">
            </div>

            <div class="form-group col-md-6">
                <label>Are you a student?<font style="color: red;">*</font></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="student" id="student_yes" value="1"
                        onchange="toggleStudentFields()">
                    <label class="form-check-label" for="student_yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="student" id="student_no" value="0"
                        onchange="toggleStudentFields()">
                    <label class="form-check-label" for="student_no">No</label>
                </div>
            </div>

            <!-- Student ID input (hidden initially) -->
            <div class="form-group col-md-6" id="student_id_field" style="display: none;">
                <label for="uid">Student ID<font style="color: red;">*</font></label>
                <input type="text" class="form-control form-control-sm" id="uid" name="uid"
                    placeholder="Enter student ID">
            </div>

            <!-- Semester input (hidden initially) -->
            <div class="form-group col-md-6" id="semester_field" style="display: none;">
                <label for="semester">Semester<font style="color: red;">*</font></label>
                <input type="text" class="form-control form-control-sm" id="semester" name="semester"
                    placeholder="Enter semester">
            </div>

            <!-- Upload picture input (hidden initially) -->
            <div class="form-group col-md-12" id="photo_field" style="display: none;">
                <label for="photo">Upload Id Card Image<font style="color: red;">*</font></label>
                <input type="file" class="form-control form-control-sm" id="photo" name="photo"
                    placeholder="Upload image of your student id card">
            </div>


            <div class="form-group col-md-6">
                <label for="name">Email<font style="color: red;">*</font></label>
                <input type="email" class="form-control form-control-sm" name="email" value="{{ @$editData['email'] }}"
                    placeholder="Enter email">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
            </div>


            <div class="form-group col-md-6">
                <label for="name">Mobile<font style="color: red;">*</font></label>
                <input type="tel" class="form-control form-control-sm" name="mobile" value="{{ @$editData['mobile'] }}"
                    placeholder="+880 1********">
                {{ $errors->has('mobile') ? $errors->first('mobile') : '' }}
            </div>

            <div class="form-group col-md-12">
                <label for="name">Address</label>
                <input type="text" class="form-control form-control-sm" name="address"
                    value="{{ @$editData['address'] }}" placeholder="Enter address">
                {{ $errors->has('address') ? $errors->first('address') : '' }}
            </div>




            <h3>Paper information</h3>
<<<<<<< HEAD
            
            <div class="form-group col-md-12">
                <label>Are you an author?<font style="color: red;">*</font></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="author" id="author_yes" value="1"
                        onchange="toggleAuthorFields()">
                    <label class="form-check-label" for="author_yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="author" id="author_no" value="0"
                        onchange="toggleAuthorFields()">
                    <label class="form-check-label" for="author_no">No</label>
                </div>
            </div>

            <!-- Student ID input (hidden initially) -->
            <!--<div class="form-group col-md-6" id="author_pid_field" style="display: none;">-->
            <!--    <label for="uid">Student ID<font style="color: red;">*</font></label>-->
            <!--    <input type="text" class="form-control form-control-sm" id="uid" name="uid"-->
            <!--        placeholder="Enter student ID">-->
            <!--</div>-->

            <!-- Semester input (hidden initially) -->
            <!--<div class="form-group col-md-6" id="semester_field" style="display: none;">-->
            <!--    <label for="semester">Semester<font style="color: red;">*</font></label>-->
            <!--    <input type="text" class="form-control form-control-sm" id="semester" name="semester"-->
            <!--        placeholder="Enter semester">-->
            <!--</div>-->
            
            <div class="form-group col-md-6" id="author_pid_field" style="display: none;">
=======
            <div class="form-group col-md-12">
>>>>>>> 817ca8d074ef94bfbb53b5dee4f7b81c410102c7
                <label for="name">Paper Id<font style="color: red;">*</font></label>
                <input type="text" class="form-control form-control-sm" name="paper_id"
                    value="{{ @$editData['paper_id'] }}" placeholder="Enter paper id">
                {{ $errors->has('paper_id') ? $errors->first('paper_id') : '' }}
            </div>


<<<<<<< HEAD
            <div class="form-group col-md-6" id="author_scope_field" style="display: none;">
                <label for="committee">Socpe<font style="color: red;">*</font></label>
                <select class="form-control form-control-sm" name="scope" id="scope" required>
                    <option value="">Select Scope</option>
                     @foreach ($scopes as $scope)
                      @if (!empty($scope->col_1) || !empty($scope->col_2) || !empty($scope->col_3))
                    <option value="{{ $scope->col_1 }}">{{ $scope->col_1 }}</option>
                    @endif
                    @endforeach
                     @foreach ($scopes as $scope)
                      @if (!empty($scope->col_2))
                    <option value="{{ $scope->col_2 }}">{{ $scope->col_2 }}</option>
                    @endif
                    @endforeach
                     @foreach ($scopes as $scope)
                      @if (!empty($scope->col_3))
                    <option value="{{ $scope->col_3 }}">{{ $scope->col_3 }}</option>
                    @endif
                    @endforeach
                   
                </select>
            </div>
            
            
            <!--<div class="form-group col-md-6">-->
            <!--    <label>Nationality</label><br>-->
            <!--    <div class="form-check form-check-inline">-->
            <!--        <input class="form-check-input" type="radio" name="nationality" id="ban" value="1">-->
            <!--        <label class="form-check-label" for="ban">Bangladesh</label>-->
            <!--    </div>-->
            <!--    <div class="form-check form-check-inline">-->
            <!--        <input class="form-check-input" type="radio" name="nationality" id="oban" value="0">-->
            <!--        <label class="form-check-label" for="oban">Outside of Bangladesh</label>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="form-group col-md-6">-->
            <!--    <label for="committee">Payment Category<font style="color: red;">*</font></label>-->
            <!--    <select class="form-control form-control-sm" name="committee" id="committee" required>-->
            <!--        <option value="">Select Category</option>-->
            <!--         @foreach ($regps as $reg)-->
            <!--          @if (!empty($reg->cat))-->
            <!--        <option value="{{ $reg->cat }}">{{ $reg->cat }} {{$reg->int}}</option>-->
            <!--        @endif-->
            <!--        @endforeach-->

            <!--    </select>-->
            <!--</div>-->
            
            
        <div class="form-group col-md-6">
    <label>Nationality</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nationality" id="ban" value="1">
        <label class="form-check-label" for="ban">Bangladesh</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nationality" id="oban" value="0">
        <label class="form-check-label" for="oban">Outside of Bangladesh</label>
    </div>
</div>

<div class="form-group col-md-6">
    <label for="pac">Payment Category<font style="color: red;">*</font></label>
    <select class="form-control form-control-sm" name="pac" id="pac" required disabled>
        <option value="">Select Payment</option> <!-- Keep this static and unchanged -->
        @foreach ($regps as $reg)
            @if (!empty($reg->cat))
                <option value="{{ $reg->cat }}" data-bangladesh="{{ $reg->nat }}" data-outside="{{ $reg->int }}">
                    {{ $reg->cat }}
                </option>
            @endif
        @endforeach
    </select>
</div>
=======
            <div class="form-group col-md-12">
                <label for="committee">Socpe<font style="color: red;">*</font></label>
                <select class="form-control form-control-sm" name="committee" id="committee" required>
                    <option value="">Select Scope</option>
                    <option value="Organizing Committee" {{ @$editData['committee']=='Organizing Committee' ? 'selected'
                        : '' }}>Organizing Committee</option>
                    <option value="Advisory Committee" {{ @$editData['committee']=='Advisory Committee' ? 'selected'
                        : '' }}>
                        Advisory Committee</option>
                    <option value="Technical Committee" {{ @$editData['committee']=='Technical Committee' ? 'selected'
                        : '' }}>
                        Technical Committee</option>
                    <option value="Registration Committee" {{ @$editData['committee']=='Registration Committee'
                        ? 'selected' : '' }}>Registration Committee</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Nationality</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nationality" id="ban" value="1">
                    <label class="form-check-label" for="ban">Bangladesh</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nationality" id="oban" value="0">
                    <label class="form-check-label" for="oban">Outside of Bangladesh</label>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="committee">Payment Category<font style="color: red;">*</font></label>
                <select class="form-control form-control-sm" name="committee" id="committee" required>
                    <option value="">Select Category</option>
                    <option value="Organizing Committee" {{ @$editData['committee']=='Organizing Committee' ? 'selected'
                        : '' }}>Organizing Committee</option>
                    <option value="Advisory Committee" {{ @$editData['committee']=='Advisory Committee' ? 'selected'
                        : '' }}>
                        Advisory Committee</option>
                    <option value="Technical Committee" {{ @$editData['committee']=='Technical Committee' ? 'selected'
                        : '' }}>
                        Technical Committee</option>
                    <option value="Registration Committee" {{ @$editData['committee']=='Registration Committee'
                        ? 'selected' : '' }}>Registration Committee</option>
                </select>
            </div>
>>>>>>> 817ca8d074ef94bfbb53b5dee4f7b81c410102c7


            <div style="text-align: right;">
                <button onclick="submitStudentData()" type="submit" class="btn btn-primary">Make Payment</button>
            </div>

            {{-- </form> --}}





        </div>



    </div>
</div>
<!-- Service End -->
@endsection