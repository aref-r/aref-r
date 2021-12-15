<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendor/toastr/toastr.min.js') }}"></script>

{{-- 
<script>
    toastr.success({{ session('seccess') }})
</script> --}}

@if (Auth::user()->lang == 'en')
    <script src="{{ asset('/vendor/toastr/toastr-init.js') }}"></script>
@elseif(Auth::user()->lang == 'fa')
    <script src="{{ asset('/vendor/toastr/toastr-init.js') }}"></script>
@endif

<script src="{{ asset('/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('/vendor/circle-progress/circle-progress-init.js') }}"></script>
<!--  flot-chart js -->
<script src="{{ asset('/vendor/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('/vendor/apexchart/apexchart-init.js') }}"></script>
<script src="{{ asset('/vendor/apexchart/apexchart2-init.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>
