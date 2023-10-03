@extends('layout')

@section('nav')
<nav>
    <a href="/">Home</a>
    <a href="/tournaments" class="active">Toernooien</a>
    <a href="/teams">Teams</a>
    <a href="/players">Spelers</a>
</nav>
@endsection

@section('content')
<h1>Toernooi aanpassen</h1>
<form action="{{ route('tournaments.update', $tournament) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Naam toernooi</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
    </div>
    <!-- add -->
    <label for="start_time">Start Tijd:</label>
    <input type="time" id="start_time" name="start_time">
    <!--  -->
    <button type="submit">Opslaan</button>
</form>


@endsection