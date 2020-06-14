@extends('layouts.app')
@section('content')
<div class="container mid">
  @if (sizeof($tasks) != 0)
  @foreach ($tasks as $key => $data)
  <tr>
    <td><h5 class="user-heading">{{$data->name}}</h5>
    <p class="table-content">{{$data->amount_left}}<br>Deadline: {{$data->deadline}}</p>
    </td>
    <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
      <button type="submit" class="btn btn-secondary done-btn">ASSIGN WORKER</button>
    </td>
  </tr>
  @endforeach
  @else
  <h2>No tasks to assign!</h2>
  @endif
</div>
@endsection
