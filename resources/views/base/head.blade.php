@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stack-@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/bootstrap-tokenfield.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

    <script src="{{ mix('js/bootstrap.js') }}"></script>
    <script src="{{ mix('js/tinymce.min.js') }}"></script>
    <script src="{{ mix('js/prism.min.js') }}"></script>
    <script src="{{ mix('js/bootstrap-tokenfield.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
@show
