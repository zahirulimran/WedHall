@extends('layouts.app')
@section('content')	

@if(session('success'))
			<div class="alert alert-success" role="alert">{{session('success')}}
			</div>
			@endif

            
<div id='calendar'></div>            

<script>

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      editable: true,
      events: [
        @foreach($bkings as $bking)
                {
                    title : '{{ $bking->whID }}-{{ $bking->status }}',
                    start : '{{ $bking->adate }}',
                    end : '{{ $bking->ddate }}',
                },
                @endforeach
      ]
    });

    calendar.render();
  });

</script>            
@endsection