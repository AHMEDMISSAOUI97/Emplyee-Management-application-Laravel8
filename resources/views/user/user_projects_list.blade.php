@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4 " >

        <form action="{{route('user_projects_list_view')}}" method="POST">
            @csrf
            <div class="form-group">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $projects)
                        <tr>
                            <td>{{ $projects->id }}</td>
                            <td>{{ $projects->name }}</td>
                            <td>{{ $projects->start_date }}</td>
                            <td>{{ $projects->end_date }}</td>




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
