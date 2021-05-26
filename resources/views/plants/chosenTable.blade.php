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
    <th>Полив</th>
    <th>Удобрение</th>
    <th>Обрезка</th>
    <th>Обработка от вредителей</th>
    <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @forelse($plants as $plant)
    <tr>
    <td><a href="{{route('onePlant', ['id' => $plant->id])}}">{{$plant->name}}</a></td>
    <td>now()</td>
    <td>полив</td>
    <td>Удобрение</td>
    <td>Обрезка</td>
    <td>Обработка от вредителей</td>
    <td>
            <a href="javascript:void(0);"
            onclick="$(this).find('form').submit();
            ">Удалить растение
                    <form action="{{route('lk.delete', $plant)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                            @csrf
                    </form>
            </a>                                    <!--<a href="javascript: ;" class="delete" rel="{{$plant->id}}">Удалить из избранного</a> -->
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
<!-- @push('js')
<script>
$(function() {
    $(".delete").on('click', function() {
        let id = $(this).attr('rel');
        if (confirm("Подтверждаете?")) {
            $.ajax({
                method:"delete",
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'), 'Content-Type': 'application/json',
                },
                url:"/lk/" + id,
                complete: function(response){
                alert("Запись с ID" + id + "удалена")}
            });
        }
    });
});
</script>
@endpush -->