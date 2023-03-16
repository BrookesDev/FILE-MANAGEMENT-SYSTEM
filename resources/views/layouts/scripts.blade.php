<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

{{-- <script src="{{asset('assets/js/feather.min.js')}}"></script> --}}
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
    
<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>






<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            @if($errors->any())

            new swal('Oops...', "{!! implode('',$errors->all(' :message')) !!}", 'error')
            @endif
            @if(session()->has('message'))

            new swal(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
            @endif
            @if(session()->has('success'))

            new swal(
                'Success!',
                "{{ session()->get('success') }}",
                'success'
            )
            @endif

        </script>