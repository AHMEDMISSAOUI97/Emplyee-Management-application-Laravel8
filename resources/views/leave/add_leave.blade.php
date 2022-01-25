@extends('layouts.admin')

@section('content')

<div class="container custom-login">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4" >

        <form action="{{route('add_leave')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">User Id</label>
              <input type="number" name="user_id" value="{{Auth::user()->id}}" readonly class="form-control" id="exampleInputEmail1" placeholder="User Id">
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
                <label for="exampleInputEmail1">Motive</label>
                <input type="text" name="motive" required class="form-control" id="exampleInputEmail1" placeholder="End motive">
              </div>
              <!--div class="form-group">
                <p>Select a motive :</p>
                    <div>
                    <input type="radio" id="exampleInputEmail1" name="motive" value=""
                            checked>
                    <label for="exampleInputEmail1">Health problems</label>
                    </div>

                    <div>
                    <input type="radio" id="exampleInputEmail1" name="motive" value="">
                    <label for="exampleInputEmail1">Family reasons</label>
                    </div>

                    <div>
                    <input type="radio" id="exampleInputEmail1" name="motive" value="">
                    <label for="exampleInputEmail1">Taking a trip</label>
                    </div>
                    <div>
                        <input type="radio" id="exampleInputEmail1" name="motive" value="">
                        <label for="exampleInputEmail1">else</label>
                        </div>
              </div-->




            <button type="submit"  class="btn btn-success">Add leave</button>
          </form>

      </div>
    </div>
</div>

@endSection
