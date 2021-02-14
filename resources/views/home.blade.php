@extends('layouts.app')

@section('content')

<div class="flex">
        <div class="card">
            <img src="{{URL('/images/plan-ishrane.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Plan ishrane</b></h4>
                    <p>Personalizovan plan ishrane za vas</p>
                    <button id="mealButton" class="btn btn-success">Počni</button>
                </div>
        </div>

        <div class="card">
            <img src="{{URL('/images/plan-treninga.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Plan treninga</b></h4>
                    <p>Personalizovan plan treninga za vas</p>
                    <button id="workoutButton" class="btn btn-success">Počni</button>
                </div>
        </div>
</div>

<div class="prozor">
<div class="mealPlanForm">
<div class="card">
    <div class="container">
        <form action="submit1" method="POST">
            Zeljeni cilj:
            <Input type="text" Name="zeljeniCilj" Size=15 Maxlength=15>
            <br>
            Pol:&nbsp;&nbsp;
            <Input type="radio" Name="pol" value="muško">&nbsp;M&nbsp;&nbsp;<Input type="radio" Name="pol1" value="žensko">&nbsp;F
            <br>
            Godine:&nbsp;
            <Input type="text" Name="godine">
            <br>
            Aktivnosti:<br>
            <Input type="checkbox" Name="teretana" value="teretana">&nbsp;Teretana&nbsp;&nbsp;<Input type="checkbox" Name="trcanje" value="trcanje">&nbsp;Trcanje<br><Input type="checkbox" name="bicikla" value="bicikla">&nbsp;Bicikla&nbsp;&nbsp;<br>
            <div class="form-group">
                <Input class="btn btn-success" type="Submit" Name="Submit" value="Submit">&nbsp;&nbsp;
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </form>
    </div>
</div>
</div>

<div class="workoutPlanForm">
<div class="card">
    <div class="container">
        <form action="" method="GET">
            Zeljeni cilj:
            <Input type="text" Name="Name" Size=15 Maxlength=15>
            <br>
            Profesionalno:&nbsp;&nbsp;
            <Input type="radio" Name="Gender">&nbsp;Da&nbsp;&nbsp;<Input type="radio" Name="Gender">&nbsp;Ne
            <br>
            Programi:<br>
            <Input type="checkbox" Name="Browsing">&nbsp;Rekreativno plivanje&nbsp;&nbsp;<Input type="checkbox" Name="Reading">&nbsp;Korektivno plivanje<br><Input type="checkbox" name="Gaming">&nbsp;Individualni treninga&nbsp;&nbsp;<br>
            <Input class="btn btn-success" type="Submit" Name="Submit" value="Submit">&nbsp;&nbsp;
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</div>
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/libs/app.js') }}"></script>
@endsection
