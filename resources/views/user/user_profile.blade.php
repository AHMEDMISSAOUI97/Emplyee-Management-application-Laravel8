@extends('layouts.admin')
@section('content')


<div class=" container">

        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" width="300" height="470" src="{{ Auth::user()->image }}" alt="">
            </div>
            <div class="col-sm-6">
                <h4>Name : {{ Auth::user()->name }}</h4>
                <h4>Email : {{ Auth::user()->email }}</h4>
                <h4>Phone Number : {{ Auth::user()->phone_number }} </h4>
                <h4>Fonction : {{ Auth::user()->fonction }} </h4>
                <h4>Solde Congé : {{ Auth::user()->solde_conge }} </h4>
                <h4>Role : {{ Auth::user()->role }} </h4>
                <br><br><br>
                <button onclick="goBack()">Go Back</button>
                <script>
                function goBack() {
                window.history.back();
                }
                </script>

                <form action="/" method="POST">

                    <a href="{{route('update_user_profile_view',Auth::user()->id)}}">
                    <button type="button" class="btn btn-primary">Edit Your Profile</button>
                    </a>

            </div>
        </div>

</div>

@endsection
