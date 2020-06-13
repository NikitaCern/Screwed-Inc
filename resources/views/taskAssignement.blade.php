@extends('layouts.app')
@section('content')
<div class="container mid">

  <div class="row bg-task">
      <div class="col-4">
        <br>
          <img src="images/dummy.jpg" class="img-fluid" alt="">

      </div>
      <div class="col-8">
        <br><br>
          <h4>Task name</h4>
          <div class="task-data">
            <p class="deadline">Dead-line: October24,2021|The Station</p>
            <p>Short Description</p><br>
          </div>

          <button type="button" class="btn btn-outline-dark read-more-btn">READ MORE</button>
          <button type="submit" class="btn btn-secondary assign-btn">ASSIGN WORKER</button>

      </div>

  </div>
  <br>
  <div class="row bg-task">
    <div class="col-4">
      <br>
        <img src="images/dummy.jpg" class="img-fluid" alt="">

    </div>
    <div class="col-8">
      <br><br>
        <h4>Task name</h4>
        <div class="task-data">
          <p class="deadline">Dead-line: October24,2021|The Station</p>
          <p>Short Description</p><br>
        </div>

        <button type="button" class="btn btn-outline-dark read-more-btn">READ MORE</button>
        <button type="submit" class="btn btn-secondary assign-btn">ASSIGN WORKER</button>

    </div>

</div>

</div>
@endsection
