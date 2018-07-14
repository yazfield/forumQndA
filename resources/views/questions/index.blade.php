@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div-- class="col-md-8 col-md-offset-2">
            <div-- class="panel panel-default">
                <!--div class="panel-heading">
                    <h3>Questions postées sur le Forum technique de la GN</h3>
                    <div class="btn-group pull-right btn-group-xs">
                        <a href="http://127.0.0.1:8000/questions/create" class="btn btn-default btn-sm pull-right">
                            <i class="svg-inline--fa fa-comment-alt fa-w-16" aria-hidden="true"></i>
                            Create New question
                        </a>
                    </div>
                </div-->
                <div class="panel-heading">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        Liste des questions
                        <div class="btn-group pull-right btn-group-xs">
                            
                                <a href="/questions/create" class="btn btn-default btn-sm pull-right">
                                    @if(config('laravelusers.fontAwesomeEnabled'))
                                        <i class="fa fa-fw fa-plus" aria-hidden="true"></i>
                                    @endif
                                    Ajouter
                                </a>

                        </div>

                    </div>
                </div>
                <hr>
                @foreach($questions as $question)
                    @if( $question->resolved)
                        <div class="panel  panel-success">
                    @else
                        <div class="panel  panel-default">
                    @endif
                        <div class="panel-heading">
                            <a href="{{$question->path()}}">{{$question->title}}</a> 
                            <span class="badge pull-right">{{$question->replies->count()}}</span>
                        </div>

                        <div class="panel-body">
                            {{$question->body}}
                        </div>
                    </div>
                @endforeach
                

                {{$questions->links()}}
            </div>
            
        </div>
    </div>
</div>
@endsection


<!--div class="panel-body">
    @foreach($questions as $question)
        <article>
        <h4>
            <a href="{{ $question->path()}}">
            {{ $question->title }}
            </a>
        </h4>
        <div class="body">{{ $question->body }}</div>
        </article>
        <hr>
    @endforeach
</div-->