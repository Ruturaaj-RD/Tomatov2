@extends('layouts.app')

@section('content')
<div id="calendar"></div>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events: {
                url: '{{ route('calendar.fetchEvents') }}',
                method: 'GET'
            },
            // Other FullCalendar options
        });
    });
</script>
@endsection
