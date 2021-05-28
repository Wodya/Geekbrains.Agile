@extends('layouts.main')
@section('content')
    <div class="container container-fluid">
{{--    @dd($dates)--}}
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Календарь полива</h1>
            <a href="{{route('catalog')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Добавить растение</a>
        </div>


        <div class="row">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Растения</th>
                        <th>Действия</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($dates as $date)
{{--                        @dd($date->dayNum, $date->plantsToWatering)--}}
                        <tr>
                            <td>{{$date->dayNum . ' мая'}}</td>

                            <td>
                            @foreach($date->plantsToWatering as $plant)
                                {{$plant}}<hr>
                            @endforeach
                            </td>

                            <td>
                            @foreach($date->plantsToWatering as $plant)
                            <div class="form-check">
                                <input type="checkbox">
                                <label class="check-label">
                                    Полить<hr>
                                </label>
                            </div>
                            @endforeach
                            </td>

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