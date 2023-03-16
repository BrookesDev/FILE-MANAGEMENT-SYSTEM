@extends('layouts.master')

@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                {{-- @foreach ($uploads as $upload) --}}
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white" style="font-size:18px;">Details of Uploaded File</div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Title: {{ $uploads->title }}</label>
                                    {{-- <input type="text" name="title" value="{{ $uploads->title }}" class="form-control"
                                        required> --}}
                                </div><br>
                                <div class="form-group">
                                    <label class="control-label ">Categories</label>
                                    <select name="categories" class="form-control select2">
                                        <option disabled selected>Select Categories</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $uploads->id }}" selected>{{ $uploads->categories }}</option>
                                            <option value="{{ $category->id }}">{{ $category->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Document
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                              <iframe src="{{ asset("file/$uploads->file") }}" style="height:800px;width:100%" title="Iframe Example"></iframe>  
                                              
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
    </div>
@endsection
