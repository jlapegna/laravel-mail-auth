@extends('layouts.base')

@section('content')

  <div class="col-6 header-title">
    <form action="{{route("room.store")}}" method="post">
      @csrf
      @method("POST")

      <label for="roomnumber">Room Number: </label>
      <input type="text" name="roomnumber" value="">
      <br>
      <label for="floor">Floors:</label>
      <input type="text" name="floor" value="">
      <br>
      <label for="beds">Beds: </label>
      <input type="text" name="beds" value="">
      <br>
      <input type="submit" name="Submit" value="Submit">
    </form>
  </div>
@endsection
