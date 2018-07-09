@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div-- class="panel panel-default">
                <div class="panel-heading"><h2>Questions postées sur le Forum technique de la GN</h2></div>
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