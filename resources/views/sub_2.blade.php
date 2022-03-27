@extends('layout')
@section('body')
<img src="./public/사진/photo%20(3).jpg" alt="" class="position-fixed background">
<section class="event event_section d-flex justify-content-center align-items-center flex-column">
    <img src="./public/사진/event_.png" alt="">
    <div class="stamp">
        <img src="./public/사진/stamp-0.png" alt="">
    </div>
    <div class="button_tap d-flex w-25 justify-content-between align-items-end mb-2">
        <div class="count m-2">
            <p>찾은 카드 수 : 0</p>
        </div>
        <div class="button">
            <button class="btn btn-outline-light m-3 start">게임시작</button>
            <button class="btn btn-outline-light m-3 d-none reload">다시시작</button>
            <button class="btn btn-outline-light m-3 hint">힌트보기</button>
        </div>
        <div class="time m-2">
            <p>1분 30초</p>
        </div>
    </div>
    <div class="card_game d-flex justify-content-center flex-wrap align-items-center">

    </div>
</section>
<div class="modal fade" id="modal_card">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>이벤트 참여</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p class="m-0">이름</p>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <p class="m-0">전화번호</p>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <p class="m-0">점수</p>
                    <input type="number" name="score" class="form-control" readonly="">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary close">닫기</button>
                <button class="btn btn-outline-primary card_submit">참여</button>
            </div>
        </div>
    </div>
</div>
<!--<div class="position-absolute copy text-center main_copy">-->
<!--    <p class="m-0">Copyright (C) Gyeongsangbuk-do.All Rights Reserved.</p>-->
<!--</div>-->
</body>
    @endsection
