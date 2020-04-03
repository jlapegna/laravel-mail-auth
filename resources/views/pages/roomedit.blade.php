@extends('layouts.base')

@section('content')

  <div class="col-6 header-title">
    <form action="{{route("room.update", $room -> id)}}" method="post">
      @csrf
      @method("PUT")

      <label for="roomnumber">Room Number: </label>
      <input type="text" name="roomnumber" value="{{$room -> roomnumber}}">
      <br>
      <label for="floor">Floors:</label>
      <input type="text" name="floor" value="{{$room -> floor}}">
      <br>
      <label for="beds">Beds: </label>
      <input type="text" name="beds" value="{{$room -> beds}}">
      <br>
      <input type="submit" name="Submit" value="Submit">
    </form>
  </div>
@endsection
