@extends('layout')
@section('body')
<section class="main d-flex">
    <div class="visual d-flex position-relative h-100 d-flex justify-content-center align-items-center flex-column">
        <img src="./public/사진/photo%20(20).jpg" alt="" class="position-absolute img_item img_1">
        <img src="./public/사진/photo%20(18).jpg" alt="" class="position-absolute img_item img_2">
        <div class="text p-5">
            <h1 class="m">SPECIALTIES</h1>
            <h2>특산품 안내</h2>
            <div class="contents mt-5">
                <p class="m-0">경상남도의 맛있고 다양한 특산품을 안내해드립니다.</p>
                <p class="m-0">경상도의 맛에 빠져보세요!</p>
                <p class="m-0">다양한 정보와 혜택을 제공해드립니다!</p>
                <p class="m-0">놓치고 후회하시기 전에 미리 맛 보세요</p>
                <a href="{{route('map.index')}}"><button class="btn btn-outline-light pl-3 pr-3">바로가기 &rarr;</button></a>
            </div>
        </div>
    </div>
    <div class="visual d-flex position-relative h-100 d-flex justify-content-center align-items-center flex-column">
        <img src="./public/사진/photo%20(3).jpg" alt="" class="position-absolute img_item img_1">
        <img src="./public/사진/photo%20(24).jpg" alt="" class="position-absolute img_item img_2">
        <div class="text p-5">
            <h1>E V E N T</h1>
            <h2>이벤트</h2>
            <div class="contents mt-5">
                <p class="m-0">경상남도의 맛있고 다양한 특산품을 안내해드립니다.</p>
                <p class="m-0">경상도의 맛에 빠져보세요!</p>
                <p class="m-0">다양한 정보와 혜택을 제공해드립니다!</p>
                <p class="m-0">놓치고 후회하시기 전에 미리 맛 보세요</p>
                <a href="./sub_2.html"><button class="btn btn-outline-light pl-3 pr-3">바로가기 &rarr;</button></a>
            </div>
        </div>
    </div>
    <div class="visual d-flex position-relative h-100 d-flex justify-content-center align-items-center flex-column">
        <img src="./public/사진/photo%20(21).jpg" alt="" class="position-absolute img_item img_1">
        <img src="./public/사진/photo%20(22).jpg" alt="" class="position-absolute img_item img_2">
        <div class="text p-5">
            <h1 class="letter">REVIEW</h1>
            <h2>구매후기</h2>
            <div class="contents mt-5">
                <p class="m-0">경상남도의 맛있고 다양한 특산품을 안내해드립니다.</p>
                <p class="m-0">경상도의 맛에 빠져보세요!</p>
                <p class="m-0">다양한 정보와 혜택을 제공해드립니다!</p>
                <p class="m-0">놓치고 후회하시기 전에 미리 맛 보세요</p>
                <a href="./sub_3.html"><button class="btn btn-outline-light pl-3 pr-3">바로가기 &rarr;</button></a>
            </div>
        </div>
    </div>
    <div class="position-absolute copy text-center main_copy">
        <p class="m-0">Copyright (C) Gyeongsangbuk-do.All Rights Reserved.</p>
    </div>
</section>
</body>
@endsection
