@extends('layouts.main')

@section('title', 'Criar Evento')
    
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="image">Imagem do evento:</label>
            <input 
                name="image" 
                type="file" 
                class="form-control-file"
                id="image" 
            >
            <div class="form-group">
                <label for="title">Evento:</label>
                <input 
                    name="title"
                    type="text" 
                    class="form-control" 
                    id="title" 
                    placeholder="Nome do Evento"
                    required
                >
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input 
                    name="date"
                    type="date" 
                    class="form-control" 
                    id="date" 
                    required
                >
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input 
                    name="city"
                    type="text" 
                    class="form-control" 
                    id="city" 
                    placeholder="Local do Cidade"
                    required
                >
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select 
                    name="private" 
                    id="private" 
                    class="form-control"
                >
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Evento:</label>
                <textarea 
                    name="description" 
                    id="description" 
                    class="form-control"
                    placeholder="O que vai acontecer no evento?"
                    required
                ></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input 
                type="submit" 
                class="btn btn-primary" 
                value="Criar Evento"
            >
        </form>
    </div>
@endsection