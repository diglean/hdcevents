@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset md-1 dashboard-title-container">
    Meus Eventos
</div>
<div class="col-md-10 offset-md-1 dashboard-events-cpntainer">
    @if(count(events) > 0)
    @else
    <p>Você ainda não tem Eventos, <a href="/events/create">Criar Evento</a></p>
    @endif
</div>

@endsection