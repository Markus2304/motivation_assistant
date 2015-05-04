@extends('home')

@section('left')

    <div class="container">
        <h1>Uredi profil</h1>
        <hr>
        <div class="row">

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Osebni podatki</h3>

                <form class="form-horizontal" role="form" method="POST" action="updateProfile">

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Ime:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="ime" type="text" value='{{$uporabnik->ime}}'>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Priimek:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="priimek" type="text" value='{{$uporabnik->priimek}}'>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Naziv:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="naziv" type="text" value='{{$uporabnik->naziv}}'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Izobrazba:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="sola" type="text" value='{{$uporabnik->izobrazba}}'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Telefon:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="telefon" type="text" value='{{$uporabnik->telefon}}'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input class="btn btn-primary" value="Shrani spremembe" type="submit">
                        </div>
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                </form>
            </div>
        </div>
    </div>
    <hr>

@endsection