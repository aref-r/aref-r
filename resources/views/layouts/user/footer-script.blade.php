
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery-ui-init.js') }}"></script>

<script src="{{ asset('/vendor/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('/vendor/magnific-popup/magnific-popup-init.js') }}"></script>

<script src="{{ asset('/vendor/validator/jquery.validate.js') }}"></script>
<script src="{{ asset('/vendor/validator/validator-init.js') }}"></script>
<script src="{{ asset('/vendor/toastr/toastr.min.js') }}"></script>

@if (Auth::user()->lang == 'en')
    <script src="{{ asset('/vendor/toastr/toastr-message-en.js') }}"></script>
@elseif(Auth::user()->lang == 'fa')
    <script src="{{ asset('/vendor/toastr/toastr-init-fa.js') }}"></script>
@endif

<script src="{{ asset('/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('/vendor/circle-progress/circle-progress-init.js') }}"></script>
<!--  flot-chart js -->
<script src="{{ asset('/vendor/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('/vendor/apexchart/apexchart-init.js') }}"></script>
<script src="{{ asset('/vendor/apexchart/apexchart2-init.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>
