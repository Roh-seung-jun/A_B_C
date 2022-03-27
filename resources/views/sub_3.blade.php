@extends('layout')
@section('body')
<img src="./public/사진/photo%20(21).jpg" alt="" class="position-fixed background">
<div class="position-fixed review text-center">
    <p class="m-0">Write Review</p>
</div>
<section class="event event_section position-relative d-flex justify-content-center align-items-center flex-column">
    <img src="./public/사진/review.png" alt="">
    <div class="d-flex w-75 under_bar">
        <div class="d-flex align-items-end mb-3 point_text">
            <h1 class="mb-0">Review</h1>
            <p class="mb-0 ml-2">구매후기</p>
        </div>
    </div>
    <div class="d-flex flex-wrap list justify-content-center">
        <div class="box m-3 p-3">
            <p class="mb-0 gray">2022-03-12</p>
            <div class="d-flex justify-content-between align-items-end">
                <h4 class="mb-0">다이소 - 무선충전기</h4>
                <p class="mb-0 text-right gray">승준</p>
            </div>
            <p class="mb-0 gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam...</p>
            <div class="d-flex mt-2">
                <img src="./public/사진/photo%20(1).jpg" alt="">
            </div>
            <div class="d-flex justify-content-between">
                <h3 class="mb-0 score">★★★★★</h3>
                <button class="btn btn-outline-light">상세 보기</button>
            </div>
        </div>
    </div>
</section>
<div class="w-100 copy text-center">
    <p class="m-0">Copyright (C) Gyeongsangbuk-do.All Rights Reserved.</p>
</div>
</body>
</html>
    @endsection
