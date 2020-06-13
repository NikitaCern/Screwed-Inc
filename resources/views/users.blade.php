@extends('layouts.app')
@section('content')
    <div class="container mid">
      <h4 class="text-center">Users</h4>

      <form>
        <div class="form-group">

          <button type="button" class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE NEW USER</button>
          <input type="text" placeholder="SEARCH TERM" class="search-bar" id="admin-search">
          <button type="submit" class="btn btn-secondary search-btn"><i class='fas fa-search'></i>SEARCH</button>

        </div>

      </form>
      <table class="table table-borderless">

        <tbody>
          <tr>
            <td><h5 class="name">Name Surname</h5>
            <p class="table-content">Position</p>
            </td>
            <td class="col-btn"><button type="button" class="btn btn-outline-dark edit-btn">EDIT</button>
              <button type="submit" class="btn btn-secondary remove-btn">REMOVE</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
@endsection
