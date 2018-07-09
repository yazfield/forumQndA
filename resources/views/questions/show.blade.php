@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel  panel-info">
                <div class="panel-heading">
                  <a href="#">{{$question->creator->name}}</a> a poste :
                  {{$question->title}} <span class="badge pull-right">{{$question->replies->count()}}</span>
                </div>

                <div class="panel-body">
                  {{$question->body}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <!--div class="main-timeline"-->
          <?php
            $replies = $question->replies()->paginate(5);
          ?>
            @foreach($replies as $reply)
              @include('questions.reply')
            @endforeach
          <!--/div-->
          {{$replies->links()}}
        </div>

    </div>

    @if(auth()->check())
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form method="POST" action="{{ $question->path(). '/replies' }}">
              {{ csrf_field()}}
              <div class="form-group">
                <textarea name="body" class="form-control" placeholder="Votre réponse..." rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Répondre</button>
            </form>
          </div>
      </div>
    @endif
</div>
@endsection