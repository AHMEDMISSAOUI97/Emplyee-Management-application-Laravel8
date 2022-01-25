@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4" >

        <form  action="{{route('update_project',$projects->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="exampleInputEmail1"> Name</label>
              <input type="text" name="name" required value="{{$projects->name}}" class="form-control" id="exampleInputEmail1" placeholder=" Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start_date" required value="{{$projects->start_date}} class="form-control" id="exampleInputEmail1" placeholder="Start Date">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">End Date</label>
                <input type="date" name="end_date" required value="{{$projects->end_date}} class="form-control" id="exampleInputEmail1" placeholder="End Date">
              </div>
              <div class="form-group">

                <label for="exampleInputEmail1">Choose a user:</label>
                <select name="assigned_user" required id="exampleInputEmail1">
                    <option value="{{$users}}">--users list--</option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

            </div>



            <button type="submit" class="btn btn-success">Update Prodact</button>
          </form>
      </div>
    </div>
</div>

@endSection
