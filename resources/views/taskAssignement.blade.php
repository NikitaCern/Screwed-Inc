@extends('layouts.app')
@section('content')
<div class="container mid">
  <h4 class="text-center">Task Asignement</h4>
  @if (sizeof($tasks) != 0)

  <table class="table">
    <tbody>
      @foreach ($tasks as $key => $data)
      <tr>
        <td><h5 class="user-heading">{{$data->name}}</h5>
        <p class="table-content">Amount left: {{$data->amount_left}}</p>
        <p class="table-content" >Deadline: {{$data->deadline}}</p>
        </td>
        <td class="col-btn">
          <a class="btn btn-outline-dark more-info">MORE INFO</a>
          <a class="btn btn-secondary done-btn">ASSIGN WORKER</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  @else
  <h2>No tasks to assign!</h2>
  @endif
</div>
@endsection
