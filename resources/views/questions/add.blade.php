@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            Ajouter votre question
            <a href="/questions" class="btn btn-info btn-xs pull-right">
                              <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                            <span class="hidden-sm hidden-xs">Retour aux </span><span class="hidden-xs">Questions</span>            </a>

          </div>
          <div class="panel-body">

            
            <form method="POST" action="/questions" accept-charset="UTF-8" role="form">


                <div class="form-group has-feedback row ">
                                  <label for="email" class="col-md-3 control-label">User Email</label>
                                <div class="col-md-9">
                  <div class="input-group">
                    <input id="email" class="form-control" placeholder="User Email" name="email" type="text">
                    <label class="input-group-addon" for="email">
                                              <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                                          </label>
                  </div>
                                  </div>
              </div>

              <div class="form-group has-feedback row ">
                                  <label for="name" class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                  <div class="input-group">
                    <input id="name" class="form-control" placeholder="Username" name="name" type="text">
                    <label class="input-group-addon" for="name">
                                              <i class="fa fa-fw fa-user" aria-hidden="true"></i>
                                          </label>
                  </div>
                                  </div>
              </div>

              
              <div class="form-group has-feedback row ">
                                  <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                  <div class="input-group">
                    <input id="password" class="form-control " placeholder="Password" name="password" type="password" value="">
                    <label class="input-group-addon" for="password">
                                              <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                          </label>
                  </div>
                                  </div>
              </div>

              <div class="form-group has-feedback row ">
                                  <label for="password_confirmation" class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                  <div class="input-group">
                    <input id="password_confirmation" class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                    <label class="input-group-addon" for="password_confirmation">
                                              <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                          </label>
                  </div>
                                  </div>
              </div>

              <button class="btn btn-success btn-flat margin-bottom-1 pull-right" type="submit"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection