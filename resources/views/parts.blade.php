@extends('layouts.app')
@section('content')
<div class="container mid">
  <br>
  <h4 class="text-center">{{ __('Parts') }}</h4>
  <form>
  <div class="form-group d-flex justify-content-around">
    <a href="{{ url('parts/create') }}" class="btn btn-outline-dark create-order-btn">{{ __('CREATE PART') }}</a>
  </div>

  </form>
  @if (sizeof($parts)!=0)
  <table class="table">

    <tbody>
      @foreach ($parts as $key => $data)
      <tr>
        <td><h5 class="name">{{$data->code}} {{$data->name}}</h5>
        <p class="table-content">{{$data->description}}</p>
        </td>
        <td class="col-btn">
          <a href="{{ url('parts/edit/' . $data->code) }}"  class="btn btn-outline-dark edit-btn">{{ __('EDIT') }}</a>
          <a href="{{ url('parts/destroy/' . $data->code) }}" class="btn btn-secondary remove-btn">{{ __('REMOVE') }}</a>
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
