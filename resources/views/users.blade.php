@extends('layouts.app')
@section('content')
<div class="container mid">
  <h4 class="text-center">{{ __('Users') }}</h4>

  <form>
    <div class="form-group d-flex justify-content-around">
      <a href="{{ url('users/create') }}" class="btn btn-outline-dark create-order-btn">{{ __('CREATE NEW USER') }}</a>
    </div>
  </form>

  @if (sizeof($users)!=0)
  <table class="table">

    <tbody>
      @foreach ($users as $key => $data)
      <tr>
        <td><h5 class="name">{{$data->first_name}} {{$data->last_name}}</h5>
        <p class="table-content">{{$data->post}}</p>
        </td>
        <td class="col-btn">
          <a  href="{{ url('users/edit/' . $data->id) }}" class="btn btn-outline-dark edit-btn">{{ __('EDIT') }}</a>
          <a href="{{ url('users/destroy/' . $data->id) }}" class="btn btn-secondary remove-btn">{{ __('REMOVE') }}</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h2>{{ __('Nothing here!') }}</h2>
  @endif
</div>
@endsection
