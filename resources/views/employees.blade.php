  @extends('layouts.app')
  @section('content')
  <div class="container mid">

    @if (sizeof($tasks) != 0)
        <table class="table table-borderless">

          <tbody>
            @foreach ($tasks as $key => $data)
            <tr>
              <td><h5 class="user-heading">{{$data->name}}</h5>
              <p class="table-content">{{$data->amount_left}}<br>Deadline: {{$data->deadline}}</p>
              </td>
              <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
                <button type="submit" class="btn btn-secondary done-btn">DONE</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      @else
      <h2>All Done! You have no tasks for now!</h2>
      @endif
  </div>
  @endsection
