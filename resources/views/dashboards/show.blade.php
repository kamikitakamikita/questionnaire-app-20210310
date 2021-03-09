@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-7">
        <h1 class="mt-5 mb-5">回答の詳細ページ</h1>
        <ul class="answer-detail-contents">
          <li style="word-break: break-all;">氏名を教えてください。</li>
          <li>→{{ $questionnaires->username }}</li>
        </ul>
        <ul class="answer-detail-contents">
          <li>年齢を教えてください。</li>
          <li>→{{ $questionnaires->age }}</li>
        </ul>
        <ul class="answer-detail-contents">
          <li>性別を教えてください。</li>
          <li>→{{ $questionnaires->gender }}</li>
        </ul>
        <ul class="answer-detail-contents">
          <li>希望物件種別を教えてください。</li>
          <li>→{{ $questionnaires->property_type }}</li>
        </ul>
        <ul class="answer-detail-contents">
          <li>その他ご要望をご入力ください。</li>
          <li style="word-break: break-all;">→{{ $questionnaires->remarks }}</li>
        </ul>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <a href="{{ route('dashboard.index') }}">一覧へ戻る</a>
    </div>
  </div>
@endsection