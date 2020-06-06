@extends('app')

@section('title', 'ログイン')

@section('content')
<div class="card card-image" style="background-image: url(https://d1f5hsy4d47upe.cloudfront.net/5f/5f8db7fad4099dbeec562664ffa4d2bc_t.jpeg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <div class="container">
        <h1 class="display-3 text-center"><a class="text-info" href="/">ログイン</a></h1>
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title ">ログイン</h4>
            <p class="card-text">

              @include('error_card_list')

              <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="md-form">
                  <input type="text" id="email" class="form-control" name="email" required value="{{ old('email') }}">
                  <label for="email">メールアドレス</label>
                </div>
                <div class="md-form">
                  <input type="password" id="password" class="form-control" name="password" required>
                  <label for="password">パスワード</label>
                </div>
                <input type="hidden" name="remember" id="remember" value="on">
                <div class="text-left">
                  <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
                </div>
                <button class="btn aqua-gradient btn-block" type="sbmit">ログイン</button>
                <div class=mt-3>
                  <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
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