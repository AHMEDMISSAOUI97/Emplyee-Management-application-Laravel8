@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4 " >
        
        <form action="{{route('users_list_view')}}" method="POST">
            @csrf
            <div class="form-group">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Solde congé</th>
                        <th scope="col">Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->phone_number }}</td>
                            <td>{{  $user->email }}</td>
                            <td>{{  $user->fonction }}</td>
                            <td>{{  $user->solde_conge }}</td>
                            <td>{{  $user->role }}</td>
                            <td>
                                <a href="show/{{$user->id}}" title="show">
                                  <button type="button" class="btn btn-success">Show</button>
                                </a></td>
                               <td> <a href="{{route('update_user_view',$user->id)}}">
                                  <button type="button" class="btn btn-primary">Edit</button>
                                </a></td>
                                <td><a href="{{route('delete_user',$user->id)}}">
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </a></td>
                                
                            </td>
                          </tr>
                        @endforeach
                     
                     
                    </tbody>
                  </table>

            </div>
        </form>
      </div>
    </div>
</div>

@endSection