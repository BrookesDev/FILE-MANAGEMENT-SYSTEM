@extends('layouts.master')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="page-title" style="margin-top: 30px;">Edit Upload <span style="color: blue">></span> file</h5>
                    <div class="text-end">
                    </div>
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
                            <input type="hidden" name="id" id="fileId">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div><br>
                            <div class="form-group">
                                <label class="control-label ">Categories</label>
                                <select name="categories" class="form-control select2">
                                    <option disabled selected>Select Categories</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">File</label>
                                <input type="file" name="file" class="form-control" required accept=".pdf,.png,.jpg,.jpeg">
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
@endsection
