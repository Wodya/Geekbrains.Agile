@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список растений
                    <a href="{{route('admin::plants::createView')}}" class="btn btn-primary"><i
                            class="fa fa-plus fa-sm text-white-50"></i> Добавить растение</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>AddDate</th>
                                <th>ShortInfo</th>
                                <th>PhotoSmallPath</th>
                                <th>WateringDays</th>
                                <th>tags</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($plants as $plant)
                                <tr>
                                    <td>{{$plant->id}}</td>
                                    <td>{{$plant->name}}</td>
                                    <td>{{$plant->addDate}}</td>
                                    <td>{{$plant->shortInfo}}</td>
                                    <td>{{$plant->photoSmallPath}}</td>
                                    <td>{{$plant->wateringDays}}</td>
                                    <td>{{$plant->tags}}</td>
                                    <td>
                                        <a href="{{route('admin::plants::updateView', ['id'=>$plant->id])}}">Ред. </a>
                                        <a href="{{route('admin::plants::delete', ['id'=>$plant->id])}}"> Уд.</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Новостей нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
{{--                        <div>{{$newsList->links()}}</div>--}}
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
