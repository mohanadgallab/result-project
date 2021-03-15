@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.update') }}">
                        <input name="_method" type="hidden" value="PUT">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $x->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $x->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        

                        <div class="form-group{{ $errors->has('result') ? ' has-error' : '' }}">
                            <label for="result" class="col-md-4 control-label">result</label>

                            <div class="col-md-6">
                                <select name="result" id="result">
                                    <option value="pass">Pass</option>
                                    <option value="failar">Failar</option>
                                </select>

                                @if ($errors->has('result'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('result') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isAdmin') ? ' has-error' : '' }}">
                            <label for="isAdmin" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select name="isAdmin" id="isAdmin">
                                    <option value="0">Student</option>
                                    <option value="1">Admin</option>
                                </select>

                                @if ($errors->has('isAdmin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isAdmin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                <a type="reset" href="/admin/routes" class="btn btn-info">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
