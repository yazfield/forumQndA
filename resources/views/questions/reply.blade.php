@if (!$reply->validated)
  <div class="panel panel-danger">
@else
  <div class="panel panel-success">
@endif
  <div class="panel-heading">
    <a href="#">
      {{$reply->owner->name}}
    </a> a repondu
    {{$reply->created_at->diffForHumans()}}
    <button type="button" class="btn btn-accept pull-right" data-id="{{$reply->id}}">
      <span class="glyphicon glyphicon-edit"></span>
    </button>
  </div>
  <div class="panel-body">
    {{$reply->body}}
  </div>
</div>