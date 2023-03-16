@extends('layouts.master')


@section('main-container')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Upload Records</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white" style="font-size:18px;"> Upload File</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('upload_save') }}" id="saveUpload"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div><br>
                                <div class="form-group">
                                    <label class="control-label ">Categories</label>
                                    <select name="categories" class="form-control select2">
                                        <option>Select</option>
                                        <option>Super Admin</option>
                                        <option>Admin</option>
                                        <option>Member</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">File</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div><br>
                                <div class="float-end">

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
@endsection
