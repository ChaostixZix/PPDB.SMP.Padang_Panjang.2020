<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB Padang</title>
    <!-- core:css -->
    <script src="{{ asset('assets') }}/vendors/core/core.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo_5/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png"/>
{{--    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />--}}
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
<div class="main-wrapper">
    @routes
    @inertia
</div>

<script src="{{ asset('assets') }}/vendors/feather-icons/feather.min.js"></script>
<script src="{{ asset('assets') }}/js/template.js"></script>
</body>
</html>
