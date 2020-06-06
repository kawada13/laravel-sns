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
       @if( Auth::id() === $article->user_id )
          <!-- dropdown -->
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                <i class="fas fa-concierge-bell"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                  <i class="fas fa-pen mr-1"></i>記事を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                </a>
              </div>
            </div>
          </div>
          <!-- dropdown -->
  
          <!-- modal -->
          <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $article->title }}を削除するで。ほんまにええか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
        @endif

    </div>

    <div class="card-body pt-0 pb-3">
      <h4 class="card-title">{{ $article->title }}</h4>
      <p class="card-text">{{ $article->body }}</p>
     </div>

  </div>

  @endforeach
</div>

