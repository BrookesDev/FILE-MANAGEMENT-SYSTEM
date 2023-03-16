
@extends('layouts.master')

@section('content')

    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-2">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Total Users</div>
                                <div class="dash-counts">
                                    <p>{{$totaluser}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-6" role="progressbar" style="width: 65%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                    class="fas fa-arrow-up me-1"></i>2.37%</span> since last week</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-1">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Total Files</div>
                                <div class="dash-counts">
                                    <p>{{$totalupload}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-5" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                    class="fas fa-arrow-down me-1"></i>1.15%</span> since last week</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-3">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Total Categories</div>
                                <div class="dash-counts">
                                    <p>{{$totalcategory}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-7" role="progressbar" style="width: 85%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                    class="fas fa-arrow-up me-1"></i>3.77%</span> since last week</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">
                        <h4 class="card-title">List of Documents</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable table table-stripped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Categories</th>
                                        <th>File</th>
                                        <th>Uploaded By</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($uploads as $upload)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $upload->title }}</td>
                                            <td>{{ $upload->categoryName->description}}</td>
                                            <td>{{ $upload->file }}</td>
                                            <td>{{ $upload->user->name }}</td>
                                            <td>
                                                {{-- {{asset("file/$upload->file")}} --}}
                                                @can('view-upload')
                                                <a href="{{ route("view_upload",$upload->id) }}" class="btn btn-success" href=""
                                                    data-bs-target="{{ $upload->id }}"> view</a>
                                                @endcan
                                                @can('edit-upload')
                                                    <a class="btn btn-success" href="" data-bs-toggle="modal"
                                                    data-bs-target="#modal{{ $upload->id }}"> Edit</a>
                                                @endcan
                                                @can('delete-upload')
                                                <a href="{{ route('deleteupload',$upload->id) }}" data-id="{{ $upload->id }}"
                                                    onclick="return confirm('Are you sure you want to delete this category?')"
                                                    class="btn btn-sm btn-danger" id="deleteRecord"> delete</a>
                                                @endcan
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
@endsection
@endsection
