@extends('layouts.master')

@section('content')
    <div class="content container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                        </div>
                    </div>
                </div>

                <div class="profile-cover">
                    <div class="profile-cover-wrap">
                        <img class="profile-cover-img" src="assets/img/category/blog-7.jpg" alt="Profile Cover" id="output">

                        <div class="cover-content">
                            <div class="custom-file-btn">
                                <input type="file" class="custom-file-btn-input" id="cover_upload" accept="image/*"
                                    onchange="loadFile(event)">
                                {{-- <label class="custom-file-btn-label btn btn-sm btn-white" for="cover_upload"> --}}
                                    {{-- <i class="fas fa-camera"></i>
                                </span class="d-none d-sm-inline-block ms-1">Update Cover</span> --}}
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-center mb-5">
                    <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                        <img class="avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="Profile Image" id="output1">
                        <input type="file" id="avatar_upload" accept="image/*" onchange="loadFiles(event)">
                        <span class="avatar-edit">
                            <i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
                        </span>
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">First Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Last Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Gender</label>
                                                <div class="col-lg-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_male" value="option1" checked>
                                                        <label class="form-check-label" for="gender_male">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            id="gender_female" value="option2">
                                                        <label class="form-check-label" for="gender_female">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Username</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Password</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Phone</label>
                                                <div class="col-lg-9">
                                                    <input type="num" class="form-control">
                                                </div>
                                            </div>
                                           
                                        
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFiles = function(event) {
        var output1 = document.getElementById('output1');
        output1.src = URL.createObjectURL(event.target.files[0]);
        output1.onload = function() {
            URL.revokeObjectURL(output1.src) // free memory
        }
    };
</script>
