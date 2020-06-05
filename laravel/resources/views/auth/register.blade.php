@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div class="card card-image" style="background-image: url(https://d1f5hsy4d47upe.cloudfront.net/5f/5f8db7fad4099dbeec562664ffa4d2bc_t.jpeg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <div class="container">
        <h1 class="display-3 text-center"><a class="text-info" href="/">ユーザー登録</a></h1>
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title ">ユーザー登録</h4>
            <p class="card-text">

              @include('error_card_list')

              <form class="text-center" style="color: #757575;" action="#!" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                  <input type="text" id="name" class="form-control" name="name" required value="{{ old('name') }}">
                  <label for="name">ユーザ名</label>
                  <small>英数字3〜16文字(登録後の変更はできません)</small>
                </div>

                <div class="md-form">
                  <input type="text" id="email" class="form-control" name="email" required value="{{ old('email') }}">
                  <label for="email">メールアドレス</label>
                </div>
                <div class="md-form">
                  <input type="password" id="password" class="form-control" name="password" required>
                  <label for="password">パスワード</label>
                </div>
                <div class="md-form">
                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                  <label for="password_confirmation">パスワード確認</label>
                </div>
                <button class="btn aqua-gradient btn-block" type="sbmit">ユーザー登録</button>
                <div class=mt-3>
                  <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
                </div>
              </form>


            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection