@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4" >

        <form action="{{route('add_project')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Project Name</label>
              <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder=" Name">
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start_date" required class="form-control" id="exampleInputEmail1" placeholder="Start Date">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">End Date</label>
                <input type="date" name="end_date" required class="form-control" id="exampleInputEmail1" placeholder="End Date">
              </div>


              <div class="form-group">

                  <label for="exampleInputEmail1">Choose a user:</label>
                  <select name="assigned_user" required id="exampleInputEmail1">
                      <option value="">--users list--</option>
                      @foreach ($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                  </select>

              </div>

            <button type="submit" class="btn btn-success">Add Project</button>
          </form>
      </div>
    </div>
</div>

@endSection
