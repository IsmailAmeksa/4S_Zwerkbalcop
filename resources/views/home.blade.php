@extends('layout')

@section('nav')
<nav>
    <a href="/" class="active">Home</a>
    <a href="/tournaments">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
</nav>
@endsection

@section('content')

<h1>Dashboard</h1>
<p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam.</p>
<div class="gridFlex">
    <div class="gridFlexAmount">
        <div class="Amount" id="amounttournaments">
            <h2>Aantal aankomende toernooien:</h2>
            <p>5</p>
        </div>
        <div class="Amount" id="amountTeams">
            <h2>Totaal aantal teams</h2>
            <p>26</p>
        </div>
    </div>
    <img src="img\snitch.png">
</div>

@endsection