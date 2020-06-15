  @extends('layouts.app')
  @section('content')
  <div class="container mid">
  <h4 class="text-center">{{ __('To-Do') }}</h4>
    @if (sizeof($tasks) != 0)
        <table class="table table-borderless">

          <tbody>
            @foreach ($tasks as $key => $data)
            <tr>
              <td><h5 class="user-heading">{{$data->name}}</h5>
              <p class="table-content">Amount Left: {{$data->amount_left}}<br>Deadline: {{$data->deadline}}</p>
              </td>
              <td class="col-btn">
                <a class="btn btn-secondary done-btn">{{ __('DONE') }}</a>
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
