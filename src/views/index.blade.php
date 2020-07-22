@extends('pro::master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card horizontal transparent">
                    <div class="card-image">
                        <img src="{{ asset('img/waysGris.jpg') }}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content center-align">
                            <span class="card-title">Master</span>
                            <form action="#" method="post">
                                <div class="input-field" >
                                    <input id="login" type="text" >
                                    <label for="login">Login (email)</label>
                                </div>
                                <div class="input-field" >
                                    <input id="password" type="password">
                                    <label for="password">Mot de passe</label>
                                </div><br>
                                <button class="btn deep-purple darken-3"> connexion</button>
                            </form>
                          </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection