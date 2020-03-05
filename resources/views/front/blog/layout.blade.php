<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Free Coding">
    <meta name="description" content="Strive to be an American, 我就是喜欢🇺🇸，随你怎么喷">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">
    <title>@yield('meta_title', config('app.name'))</title>
</head>
<body>
<div id="blogpage" class="container-fluid">
    @yield('main')
</div>
<button id="totop" title="Go to top" style="display: block;"><i class="el-icon-top"></i></button>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ mix('js/blog.js') }}"></script>
@include('front.layout.baidu')
</body>
</html>
