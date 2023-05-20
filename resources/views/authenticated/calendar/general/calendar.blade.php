@extends('layouts.sidebar')

@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>
<!-- ↓モーダル -->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form action="{{ route('deleteParts') }}" method="post">
      <div class="w-120">
        <div class="modal-inner-date w-50 m-auto">
          <p>予約日：<span name="date"></span></p>
          <input type="hidden" name="date">
        </div>
        <div class="modal-inner-part w-50 m-auto pt-3 pb-3">
          <p>時間：リモ<span name="part"></span>部</p>
          <input type="hidden" name="part">
          <p>上記の予約をキャンセルしてもよろしいですか？</p>
        </div>
      <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-danger d-inline-block" href="">戻る</a>
          <input type="submit" class="btn btn-primary d-block" value="OK">
        </div>
      </div>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
