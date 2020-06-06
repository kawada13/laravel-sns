@extends('app')

@section('title', '記事投稿')

@section('content')
@include('nav')

<div class="card card-image" style="background-image: url(https://i.pinimg.com/originals/23/52/75/235275027f4f716ae1b0e722ee9b3194.png);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <div class="container">
        <h2 class="card-title h2 my-4 py-2">記事投稿</h2>
        <div class="card">

          <div class="card-body">
            @include('error_card_list')
            <p class="card-text">
              <form class="text-center" style="color: #757575;" action="{{ route('articles.store')}}" method="POST">

                @include('articles.form')
                <button class="btn purple-gradient btn-block" type="submit">投稿する</button>

              </form>
            </p>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>

@endsection