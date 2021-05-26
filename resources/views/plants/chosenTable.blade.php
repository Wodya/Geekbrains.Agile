@extends('layouts.main')
@section('content')
<div class="container container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список избранных растений</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить растение</a>
    </div>


    <div class="row">

    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Название растения</th>
    <th>Дата добавления</th>
    <th>Период полива (дн.)</th>
    <th>Свойства</th>
    <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @forelse($plants as $plant)
    <tr>
    <td><a href="{{route('onePlant', ['id' => $plant->id])}}">{{$plant->name}}</a></td>
    <td>{{$plant->addDate}}</td>
    <td>{{$plant->wateringDays}}</td>
    <td>{{$plant->tags}}</td>
    <td><a href="#">Удалить из избранного</a></td>
    </tr>
    @empty
    <tr>
        <td calspan="4"> Выбранных растений нет</td>
    </tr>
    @endforelse
    </tbody></table>
    </div>

</div>

@endsection
