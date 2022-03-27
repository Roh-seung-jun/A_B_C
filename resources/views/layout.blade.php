<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="token" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('./public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./public/css/style.css')}}">
    <script src="{{asset('./resources/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('./resources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('./resources/js/script.js')}}"></script>
    @yield('css')
    @yield('script')
    <title>Document</title>
</head>

<body class="position-relative">
<img src="./public/사진/text.png" alt="" class="position-absolute pl-3 pt-2" style="z-index: 123123;width: 350px;">
<input type="radio" name="menu" class="d-none" id="open" >
<input type="radio" name="menu" class="d-none" id="close" checked="">
<input type="checkbox" name="icon" class="d-none" id="icon">
<div class="position-fixed d-flex menu_bar h-100 position-relative">
    <div class="icon position-relative">
        <label for="open" class="m-0 position-absolute menu_open type_menu d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/menu.png" alt=""></label>
        <label for="close" class="m-0 position-absolute menu_close type_menu d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/close.png" alt=""></label>
        <label for="icon" class="icon_label icon_menu position-absolute d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/share.png" alt=""></label>
        <label class="icon_label icon_1 icon_img position-absolute d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/icon1.png" alt=""></label>
        <label class="icon_label icon_2 icon_img position-absolute d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/icon2.png" alt=""></label>
        <label class="icon_label icon_3 icon_img position-absolute d-flex justify-content-center align-items-center"><img src="./public/소셜아이콘/icon3.png" alt=""></label>
    </div>
    <div class="menu d-flex flex-column justify-content-center align-items-start">
        <a href="{{route('/')}}" ><p class="ml-3 pl-4">Home (홈)</p></a>
        <a href="{{route('map.index')}}" ><p class="ml-3 pl-4">특산품 안내</p></a>
        <a href="{{route('event.index')}}" ><p class="ml-3 pl-4">이벤트</p></a>
        <a href="{{route('review.index')}}"><p class="ml-3 pl-4">구매후기</p></a>
    </div>
</div>
@yield('body')


