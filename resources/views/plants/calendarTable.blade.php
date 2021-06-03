@extends('layouts.main')
@section('content')
  <script type="text/javascript" src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
  <div class="div-box">
    <div class="home-4-new-collections">
    <div class="container container-fluid">
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 calendar-head">
            <h1 class="h3 mb-0 text-gray-800">Календарь ухода за растениями</h1>
            <a href="{{route('catalog')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Добавить растение</a>
        </div>


        <div class="row">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr class="odd-row">
                        <th class="calendar-td-center">Дата</th>
                        <th class="calendar-td-center">Растения</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($dates as $date)
                        <tr class="{{$loop->iteration % 2 == 0 ? 'odd-row' : ''}}">
                            <td class="calendar-td-center">{{$date->dayNum . ' мая'}}</td>
                            <td class="calendar-td">
                                @foreach($date->plantsToDo as $do)
                                <div class="calendar-td-item" title="{{$do->action->info}}">
                                    <img src="/Images/Small/{{$do->plant->photoSmallPath}}" alt="slide" height="20px" width="40px"/>
                                    <p class="calendar-td-name">{{$do->plant->name}}</p>
                                    <label class="form-check">
                                        <input class="calendar-td-check" type="checkbox" data-plantid="{{$do->plant->id}}" data-actionid="{{$do->action->id}}" data-date="{{$date->date}}" {{$do->done?"checked":""}}>
                                        <p>{{$do->action->name}}</p>
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
    </div>
</div>
</div>
<script>
  $('.calendar-td-check').click(function (e){
      let url = '';

      if ($(this).is(':checked'))
          url = "{{route('plant.setUserPlantDone', ['userId'=>'user_id_val', 'plantId'=>'plant_id_val', 'actionId'=>'action_id_val', 'date'=>'date_val'])}}";
      else
          url = "{{route('plant.resetUserPlantDone', ['userId'=>1, 'plantId'=>'plant_id_val', 'actionId'=>'action_id_val', 'date'=>'date_val'])}}";

      url = url.replace('user_id_val', 1);
      url = url.replace('plant_id_val', $(this).data("plantid"));
      url = url.replace('action_id_val', $(this).data("actionid"));
      url = url.replace('date_val', $(this).data("date"));
      $.ajax({
          url: url,
          success: function(data) {
              console.log(url);
          }
      });
  });
</script>
@endsection

