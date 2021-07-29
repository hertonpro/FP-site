<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Fondation Panzi RDC </title>

@livewireStyles()
<!-- Fonts -->


<link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

<!-- Styles -->
<!-- Bootstrap CSS -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/galery.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/dataTables/jquery.dataTables.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

<link href="{{ asset('css/plugins/dropzone/basic.css')}}" rel="stylesheet">
<link href="{{ asset('css/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
<link href="{{ asset('css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
<link href="{{ asset('css/plugins/chosen/chosen.css')}}" rel="stylesheet">

<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/chosen.js') }}"></script>
<script src="{{ asset('js/chosen.jquery.js') }}"></script>
<script>
    $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});
</script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
{{-- 
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"> --}}



