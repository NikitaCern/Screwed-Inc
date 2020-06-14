@extends('layouts.app')
@section('content')
    <div class="container mid">
      <h4 class="text-center">Users</h4>

      <form>
        <div class="form-group">

          <a href="{{ url('new_user') }}" class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE NEW USER</a>
          <input type="text" placeholder="SEARCH TERM" class="search-bar" id="admin-search">
          <button type="submit" class="btn btn-secondary search-btn"><i class='fas fa-search'></i>SEARCH</button>

        </div>

      </form>
      @if (sizeof($users) != 0)
      <table class="table table-borderless">

        <tbody>
          @foreach ($users as $key => $data)
          <tr>
            <td><h5 class="name">{{$data->first_name}} {{$data->last_name}}</h5>
            <p class="table-content">{{$data->post}}</p>
            </td>
            <td class="col-btn"><button type="button" class="btn btn-outline-dark edit-btn">EDIT</button>
              <button type="submit" class="btn btn-secondary remove-btn">REMOVE</button>
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
