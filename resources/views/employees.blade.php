  @extends('layouts.app')
  @section('content')
  <div class="container mid">

    <table class="table table-borderless">

        <tbody>
          <tr class="first-strip">

            <td><h5 class="user-heading">Task1</h5>
            <p class="table-content">Short description<br>Deadline:</p>

            </td>
            <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
              <button type="submit" class="btn btn-secondary done-btn">DONE</button>
            </td>
          </tr>
          <tr class="second-strip">

            <td><h5 class="user-heading">Task1</h5>
              <p class="table-content">Short description<br>Deadline:</p>
            </td>
            <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
              <button type="submit" class="btn btn-secondary done-btn">DONE</button>
            </td>
          </tr>
          <tr class="first-strip">

            <td><h5 class="user-heading">Task1</h5>
              <p class="table-content">Short description<br>Deadline:</p>
            </td>
            <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
              <button type="submit" class="btn btn-secondary done-btn">DONE</button>
            </td>
          </tr>
        </tbody>
      </table>

  </div>
  @endsection
