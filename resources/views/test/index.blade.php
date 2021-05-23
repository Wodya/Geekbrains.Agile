<table class="table table-bordered">
    <thead>
    <tr>
        <th>id</th>
        <th>Наименование</th>
        <th>Инфо</th>
        <th>Путь</th>
        <th>Теги</th>
    </tr>
    </thead>
    <tbody>
@forelse($PlantList as $plant)
    <tr>
        <td>{{ $plant->id }}</td>
        <td>{{ $plant->name }}</td>
        <td>{{ $plant->shortInfo }}</td>
        <td>{{ $plant->photoSmallPath }}</td>
    </tr>
@empty
    <h2>Растений нет</h2>
    @endforelse
    </tbody>
</table>
