
@extends('layouts.master')


@section('main-container')

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-1">
                                        <i class="fas fa-file-alt"></i>
                                    </span>
                                    <div class="dash-count">
                                        <div class="dash-title">Total PDF</div>
                                        <div class="dash-counts">
                                            <p>1,642</p>
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
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-2">
                                        <i class="fas fa-file-alt"></i>
                                    </span>
                                    <div class="dash-count">
                                        <div class="dash-title">Total Excel</div>
                                        <div class="dash-counts">
                                            <p>3,642</p>
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
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-3">
                                        <i class="fas fa-file-alt"></i>
                                    </span>
                                    <div class="dash-count">
                                        <div class="dash-title">Total Ms</div>
                                        <div class="dash-counts">
                                            <p>1,041</p>
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
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-4">
                                        <i class="far fa-file"></i>
                                    </span>
                                    <div class="dash-count">
                                        <div class="dash-title">Estimates</div>
                                        <div class="dash-counts">
                                            <p>2,150</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-8" role="progressbar" style="width: 45%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                            class="fas fa-arrow-down me-1"></i>8.68%</span> since last week</p>
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
                                    <table class="table table-stripped table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Document Title</th>
                                                <th>Description</th>
                                                <th>Date Updated</th>
                                                <th>Uploaded By</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"> Charles Hafner</a>
                                                    </h2>
                                                </td>
                                                <td><a href="https://dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="41222920332d24322920272f2433012439202c312d246f222e2c">[email&#160;protected]</a></td>
                                                <td>16 Nov 2020</td>
                                                <td><span class="text-success">Admin</span></td>
                                                <td><span class="badge badge-pill bg-success-light">Active</span></td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
                                                </td>
                                            </tr>
         --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    @yield('script')
</body>

</html>
@endsection