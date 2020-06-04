@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<div class="container">
  @foreach($articles as $article)

  <div class="card mt-3 example z-depth-5">

    <div class="card-body d-flex flex-row">

      <i class="fas fa-chess-knight fa-3x mr-2"></i>
      <div>

          <div class="font-weight-bold">
            {{ $article->user->name }}
          </div>
          <div class="font-weight-lighter">
           {{ $article->created_at->format('Y/m/d H:i') }}
          </div>
       </div>

    </div>

    <div class="card-body pt-0 pb-3">
      <h4 class="card-title">{{ $article->title }}</h4>
      <p class="card-text">{{ $article->body }}</p>
     </div>

  </div>

  @endforeach
</div>
@endsection