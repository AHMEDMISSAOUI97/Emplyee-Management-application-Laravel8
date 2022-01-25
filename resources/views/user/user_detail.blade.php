@extends('layouts.admin')
@section('content')


<div class=" container">

        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" width="370" height="370" src="{{$users['image']}}" alt="">
            </div>
            <div class="col-sm-6">
                <h4>Name : {{$users['name']}}</h4>
                <h4>Email : {{$users['email']}} </h4>
                <h4>Phone Number : {{$users['phone_number']}} </h4>
                <h4>Fonction : {{$users['fonction']}} </h4>
                <h4>Solde Congé : {{$users['solde_conge']}} </h4>
                <h4>Role : {{$users['role']}} </h4>
                <br><br><br>
                <button onclick="goBack()">Go Back</button>
                <script>
                function goBack() {
                window.history.back();
                }
                </script>

            </div>
        </div>

</div>

@endsection
