@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{route('admin.users.store')}}">
            @csrf
            @method('POST')
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Редактирование пользователя
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <label for="name">
                                            Name
                                        </label>
                                    </th>
                                    <th>
                                        <label for="role">
                                            Role
                                        </label>
                                    </th>
                                    <th>
                                        <label for="email">
                                            Email
                                        </label>
                                    </th>
                                    <th>
                                        <label for="password">
                                            Password
                                        </label>
                                    </th>
                                    <th>
                                        <label for="avatar">
                                            Avatar
                                        </label>
                                    </th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Имя пользователя" value="">
                                    </td>
                                    <td>
                                        <select class="role_edit" name="role" placeholder="роль">
                                            </option>
                                            <option>admin</option>
                                            <option>user</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="email" placeholder="email"
                                            value="">
                                    </td>
                                    <td>
                                        <input type="password" maxlength="25" size="40" name="password"
                                            placeholder="пароль">
                                    </td>
                                    <td>
                                        <img src="http://placehold.it/120x120" alt="slide" height="60px"
                                            width="120px" />
                                    </td>
                                    <td>
                                        <input class="btn btn-primary" style="float: right" type="submit"
                                            value="Добавить">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
        </form>
    </div>
    <!--End Advanced Tables -->
</div>
</div>





@endsection