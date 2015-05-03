@extends('home')

@section('left')

        <div class="well well-sm">
            <div class="media">
                <a class="thumbnail pull-left" href="#">
                    <img class="media-object" src="http://www.sociallinkmart.com/newimages/user1.png">
                </a> <div class="media-body">
                    <h4 class="media-heading">{{$uporabnik->naziv}} {{$uporabnik->ime}} {{$uporabnik->priimek}}</h4>
                    <h4 class="media-heading">{{$uporabnik->rojstvo}}</h4>
                    <h4 class="media-heading">{{$uporabnik->izobrazba}}</h4>
                    <h4 class="media-heading">{{$uporabnik->telefon}}</h4>
                    <h4 class="media-heading">{{$uporabnik->email}}</h4>
                    <h4 class="media-heading">
                        <a href="edit">Uredi profil</a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="well">

            <h4 class="heading"> Zadolzitve </h4>

            <hr>
            <p>Razvoj motivacijskega asistena</p>
            <p>Raiziskovanje nadleznih in obskurnih frameworkov.</p>
            <p>Laravel</p>

        </div>

@endsection