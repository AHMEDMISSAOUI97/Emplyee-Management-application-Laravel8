@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4" >

        <form action="{{route('update_user',$users->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="exampleInputEmail1"> Name</label>
              <input type="text" name="name"  value="{{$users->name}}" class="form-control" id="exampleInputEmail1" placeholder=" Name">
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email"  value="{{$users->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" required class="form-control" id="exampleInputEmail1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="number" name="phone_number" value="{{$users->phone_number}}" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fonction</label>
                <input type="text" name="fonction" class="form-control" value="{{$users->fonction}}"  id="exampleInputEmail1" placeholder="Fonction">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Solde de congé</label>
                <input type="number" name="solde_conge" class="form-control" value="{{$users->solde_conge}}" id="exampleInputEmail1" placeholder="Solde Congé">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> Role : </label>
                <br>
                <input type="checkbox" id="role1" name="role" value="admin">
                <label for="role1">Admin</label><br>
                <input type="checkbox" id="role2" name="role" value="user">
                <label for="role2">User</label><br>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="URL" name="image" required class="form-control" {{$users->image}} id="exampleInputPassword1" placeholder="User Image">
              </div>

            <button type="submit" class="btn btn-success">Update User</button>
          </form>
      </div>
    </div>
</div>

@endSection
