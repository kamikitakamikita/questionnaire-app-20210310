@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-7">
        <h1 class="mt-5 mb-5">アンケート回答ページ</h1>

        @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $message)
              <p>{{ $message }}</p>
            @endforeach
          </div>
        @endif

        <form action="{{ route('questionnaire.create') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="username">氏名を教えてください。</label>
            <input type="text" id="username" name="username" class="form-control col-xl-5" placeholder="アンケート太郎">
          </div>
          <div class="form-group">
            <label for="age">年齢を教えてください。</label>
            <select class="form-control col-xl-3" id="age" name="age">
              @foreach(config('const.ages') as $age)
                <option value="{{ $age }}">{{ $age }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="gender">性別を教えてください。</label>
            @foreach(config('const.genders') as $gender)
              <div class="form-check">
                <input class="form-check-input" name="gender" type="radio" id="{{ $gender }}" value="{{ $gender }}">
                <label class="form-check-label" for="{{ $gender }}">{{ $gender }}</label>
              </div>
            @endforeach
          </div>
          <div class="form-group">
            <label class="control-label">希望物件種別を教えてください。</label>
            @foreach(config('const.property_types') as $property_type)
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="property_type[]" class="custom-control-input" value="{{ $property_type }}" id="{{ $property_type }}">
                <label class="custom-control-label" for="{{ $property_type }}">{{ $property_type }}</label>
              </div>
            @endforeach
          </div>
          <div class="form-group">
            <label for="remarks">その他ご要望をご入力ください。</label>
            <textarea class="form-control col-xl-6" id="remarks" name="remarks" rows="3"></textarea>
          </div>
          <div class="form-submit ">
            <button class="btn btn-primary"> 送信 </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection