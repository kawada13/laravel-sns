@extends('app')

@section('title', 'パスワード再設定')

@section('content')
<div class="card card-image" style="background-image: url(https://d1f5hsy4d47upe.cloudfront.net/5f/5f8db7fad4099dbeec562664ffa4d2bc_t.jpeg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <div class="container">
        <h1 class="display-3 text-center"><a class="text-info" href="/">パスワード再設定</a></h1>
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title ">パスワード再設定</h4>
            <p class="card-text">

              @include('error_card_list')

              @if (session('status'))
              <div class="card-text alert alert-success">
                {{ session('status') }}
              </div>
              @endif

              <form class="text-center" style="color: #757575;" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="md-form">
                  <input type="text" id="email" class="form-control" name="email" required">
                  <label for="email">メールアドレス</label>
                </div>
                <button class="btn aqua-gradient btn-block" type="submit">メール送信</button>
              </form>


            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection