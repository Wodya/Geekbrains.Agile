@extends('layouts.main')
@section('content')
    <div class="container container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список избранных растений</h1>
            <a href="{{route('catalog')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Добавить растение</a>
            <a href="{{route('calendar')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Посмотреть календарь</a>
        <!-- Проверка на удаление -->
        @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
        <!--  -->
        </div>


        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Название растения</th>
                    <th>Дата добавления</th>
                    <th>Период полива (дн.)</th>
                    <th>Период подкормки (дн.)</th>
                    <th>Период обработки от вредителей (дн.)</th>
                    <th>Свойства</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse($plants as $plant)
                    <tr>
                        <td>
                            <a href="{{route('onePlant', ['id' => $plant->id])}}">
                                <p>{{$plant->name}}</p>
                                <img src="/Images/Small/{{$plant->photoSmallPath}}" alt="slide" width="100px"/>
                            </a>
                        </td>
                        <td>{{$plant->addDate}}</td>
                        <td>{{$plant->wateringDays}}</td>
                        <td>{{$plant->manuringDays}}</td>
                        <td>{{$plant->pestControlDays}}</td>
                        <td>{{$plant->tags}}</td>
                        <td>
                            <a href="{{route('removePlantFromFavor', ['userId'=>1, 'plantId'=>$plant->id])}}">Удалить из избранного </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td calspan="4"> Выбранных растений нет</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>

@endsection
