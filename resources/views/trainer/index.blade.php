@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Marko Nikolić
    </h1>
    <div class="description">
        Marko Nikolić je trener dugogodišnjeg iskustva kako sa juniorskim, tako i sa seniorskim selekcijama.
    </div>
    <div class="social">
        <a href="www.facebook.com">Facebook</a>
        <a href="www.instagram.com">Instagram</a>
        <a href="www.linkedin.com">LinkedIn</a>
    </div>
    <a href="editTrainer/1" class="btn btn-primary trenerDugme">Izaberi</a>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
        </div>
        <div class="projects">
        <p>Klijenti:</p>
        <p>154</p>
        </div>
    </footer>
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        Petar Petrović
    </h1>
    <div class="description">
        Petar Petrović je naš čuveni trener. Osvajač svetskog i evropskog prvenstva sa reprezentacijom.
    </div>
    <div class="social">
        <a href="www.facebook.com">Facebook</a>
        <a href="www.instagram.com">Instagram</a>
        <a href="www.linkedin.com">LinkedIn</a>
    </div>
    <a href="editTrainer/2" class="btn btn-primary trenerDugme">Izaberi</a>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.3K</p>
        </div>
        <div class="projects">
        <p>Klijenti</p>
        <p>78</p>
        </div>
    </footer>
    </div>
</div>
@endsection
