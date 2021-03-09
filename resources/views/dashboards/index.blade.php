@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-7">
        <h1 class="mt-5 mb-5">回答の一覧ページ</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">回答者氏名（回答日時）</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($userlists as $userlist)
              <tr>
                <td>
                  <a href="{{ route('dashboard.show', $userlist->id) }}">{{ $userlist->username }}（{{ $userlist->created_at->format('Y年m月d日') }}）</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection