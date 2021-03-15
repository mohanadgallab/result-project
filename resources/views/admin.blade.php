@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-3 col-md-offset-1 pull-right">
                <a href="{{ route('admin.create') }}" class="btn btn-info">Addd New User</a>
            </div>
            <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default">
                    <div class="panel-heading btn-primary ">
                        <table class="table table-striped">
                            <th>name</th>
                            <th>Role</th>
                            <th>Result</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <tbody>
                                @foreach ($x as $y)
                                <tr>
                                    <td>{{$y->name}}</td>
                                    <td>@if ($y->isAdmin == 1)
                                        <a href="#">Admin</a>
                                    @else
                                    <a href="#">Student</a>
                                    @endif</td>
                                    <td>{{$y->result}}</td>
                                    <td>
                                        <a href="/admin/routes/{{$y->id}}/edit" class="fa fa-edit"></a>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="fa fa-trash"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection