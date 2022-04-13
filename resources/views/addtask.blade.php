@extends('partials.navbar')

@section('container')

<div class="container add task">
    <br><br>
    <h2 class="text-center">Add a New Task</h2><br>
    <form action="#">
      <div class="row">
        <div class="col-25">
          <label for="fname">Company</label>
        </div>
        <div class="col-75">
          <input type="text" id="cname" name="companyname" placeholder="Company name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="ddate">Due Date</label>
        </div>
        <div class="col-75">
          <input type="date" class="form-control" max="3000-12-31" min="1000-01-01" id="ddate" name="duedate" placeholder="mm/dd/yyyy">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject Project</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something" style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="btn-lg d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="submit" value="Submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script type="text/javascript">
    $('.datepicker').datepicker();
  </script>
<script src="js/script.js"></script>

@endsection   