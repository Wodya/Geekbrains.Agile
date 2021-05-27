@extends('layouts.main')
@section('content')
    <div class="container container-fluid">
{{--    @dd($dates)--}}
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список избранных растений</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Добавить растение</a>
        </div>


        <div class="row">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Растения</th>
                        <th>Действия</th>
                        <th>Растения</th>
                        <th>Действия</th>
                        <th>Растения</th>
                        <th>Действия</th>
                        <th>Растения</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($dates as $date)
{{--                        @dd($date->dayNum, $date->plantsToWatering)--}}
                        <tr>
                            <td>{{$date->dayNum . ' мая'}}</td>
                            @foreach($date->plantsToWatering as $plant)
                            <td>
                                    {{$plant}}<br>
                            </td>
                            <td>
                                Полить
                            </td>
                            @endforeach
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
