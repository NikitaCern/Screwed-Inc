@extends('layouts.app')
@section('content')
    <div class="container mid">
      <h4 class="text-center">Users</h4>

      <form>
        <div class="form-group d-flex justify-content-around">

          <a href="{{ url('new_user') }}" class="btn btn-outline-dark create-order-btn">CREATE NEW USER</a>

        </div>

      </form>
      @if (sizeof($users) != 0)
      <table class="table">

        <tbody>
          @foreach ($users as $key => $data)
          <tr>
            <td><h5 class="name">{{$data->first_name}} {{$data->last_name}}</h5>
            <p class="table-content">{{$data->post}}</p>
            </td>
            <td class="col-btn">
              <a class="btn btn-outline-dark edit-btn">EDIT</a>
              <a class="btn btn-secondary remove-btn">REMOVE</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <h2>No Users in the database!</h2>
      @endif
    </div>
@endsection
