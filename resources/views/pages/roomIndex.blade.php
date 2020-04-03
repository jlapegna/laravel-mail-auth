@extends('layouts.base')

@section('content')

<div class="col-6 header-title">

<a href="{{route("room.create")}}">Create!</a>

<h4>Room List: {{$rooms -> count()}}</h4>


  <table>

      <tr>
          <td>[ROOM NUMBER]</td>
          <td>[FLOOR]</td>
          <td>[BEDS]</td>
          <td>[# OF RESERVATIONS]</td>
          <td>[EDIT]</td>
      </tr>
      @foreach ($rooms as $room)
      <tr>
      <td>{{$room -> roomnumber}}</td>
      <td>{{$room -> floor}} </td>
      <td>{{$room -> beds}} </td>
      <td>{{$room -> reservations() -> count()}}</td>
      <td><a href="{{route("room.edit", $room -> id)}}">Click Me!</a>

      <td>
        @foreach ($room -> reservations as $reservation)

        @endforeach
      </td>
      </tr>
      @endforeach
  </table>
  </div>


@endsection
