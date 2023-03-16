@extends('layouts.master')


@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="page-title" style="margin-top: 30px;">Upload<span style="color: blue">></span>Uploaded Documents</h5>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($uploads as $upload)
                <div class="col-3 col-md-4 col-lg-3 d-flex">
                    <div class="card flex-fill bg-white">
                        <div class="text-center p-3">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                <path
                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                            </svg> -->
                            <img src="{{asset('assets/img/pdf.jpg')}}" alt="" width="50" height="50">
                            <!-- <script>

                                if(extensions='.jpg'){
                                     <img src="{{asset('assets/img/pdf.jpg')}}" alt="" width="50" height="50">
                                }else(extensions='.png'){
                                    <img src="{{asset('assets/img/jpg.png')}}" alt="" width="50" height="50">
                                }
                            </script> -->


                            <!-- <p id="icon"></p>

                            <script>
                                const icon = ['png', 'jpg'];
                                let displayIcon;
                                if (icon === '.jpg') {
                                    displayIcon = '<img src="{{asset('assets/img/pdf.jpg')}}" alt="" width="50" height="50">';
                                } else (icon === '.png') {
                                    displayIcon = '<img src="{{asset('assets/img/jpg.png')}}" alt="" width="50" height="50">';
                                }
                                document.getElementById("icon").innerHTML = displayIcon;
                            </script> -->

                        </div>
                        <i class="fe fe-file-text" aria-hidden="true"></i>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Title: {{ $upload->title }}</li>
                            <li class="list-group-item">Category: {{ $upload->categoryName->description}}</li>
                            <li class="list-group-item">File: {{ $upload->file }}</li>
                            <li class="list-group-item">Uploaded by: {{ $upload->user->name }}</li>
                            <li class="list-group-item text-end">
                                {{-- <a href="{{ asset("file/$upload->file") }}" target="_blank" class="btn btn-success" href="" data-bs-target="{{ $upload->id }}">  --}}
                                @can('view-upload')
                                <a href="{{ route("view_upload",$upload->id) }}"  class="btn btn-success" data-bs-target="{{ $upload->id }}">
                                @endcan
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </a>
                                {{-- <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#modal{{$user->id}}"> Edit</a> --}}
                                @can('edit-upload')
                                <a class="btn btn-success" href="{{ route('edit_upload', $upload->id) }}" data-bs-toggle="modal" data-bs-target="#modal{{ $upload->id }}">
                                @endcan
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                @can('delete-upload')
                                <a href="{{ route('deleteupload', $upload->id) }}" data-id="{{ $upload->id }}" onclick="return confirm('Are you sure you want to delete this category?')"
                                    class="btn btn-sm btn-danger" id="deleteRecord">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash-fill"
                                        viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                                @endcan
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        @foreach ($uploads as $upload)
        <div class="modal fade" id="modal{{$upload->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Edit Uploaded File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('edit_upload', $upload->id)}}" id="upload" enctype="multipart/form-data">
                            @csrf
                                  <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$upload->title}}" class="form-control"
                                    required>
                            </div><br>
                            <div class="form-group">
                                <label class="control-label ">Category</label>
                                <select name="categories" class="form-control select2">
                                    <option disabled >Select Categories</option>
                                     @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($category->id == $upload->categories ) selected @endif>{{ $category->description }}</option>
                                     @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="">File</label>
                                <input type="file" name="file" class="form-control" value="{{ $upload->file }}"
                                    required>
                                </div><br>
                                <img src="{{asset('file/'.$upload->file)}}" alt="">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary">Save</button>
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
