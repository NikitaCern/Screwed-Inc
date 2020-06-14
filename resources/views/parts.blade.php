@extends('layouts.app')
@section('content')
<div class="container mid">
  <br>
  <h4 class="text-center">Parts</h4>
  <form>
  <div class="form-group">
    <a class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE PART</a>
    <input type="text" placeholder="SEARCH" class="search-bar">
    <button type="submit" class="btn btn-secondary search-btn"><i class='fas fa-search'></i>SEARCH</button>
  </div>

  </form>
  @if (sizeof($parts) != 0)
  <table class="table table-borderless">

    <tbody>
      @foreach ($parts as $key => $data)
      <tr>
        <td><h5 class="name">{{$data->code}} {{$data->name}}</h5>
        <p class="table-content">{{$data->description}}</p>
        </td>
        <td class="col-btn"><button type="button" class="btn btn-outline-dark edit-btn">EDIT</button>
          <button type="submit" class="btn btn-secondary remove-btn">REMOVE</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <h2>No parts left!</h2>
  @endif
</div>
@endsection
