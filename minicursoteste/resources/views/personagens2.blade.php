<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens do League of Legends</title>
    <link rel="stylesheet" href="{{ asset('css/personagens.css') }}">
</head>
<body>
@foreach ($personagens as $personagem) 
    <div class="character-card">
    <img class="character-image" src="{{ asset('storage/images/' . $personagem->imagem) }}" alt="{{ $personagem->nome }}">
    <h2 class="character-name">{{$personagem->nome}}</h2>
        <p class="character-description">
            {{$personagem->descricao}}        
        </p>
        <div class="button-container">
        <a href="{{ route('detalhes', ['id' => $personagem->id]) }}" class="action-button">Detalhes</a>
        <a href="{{ route('editar', ['id' => $personagem->id]) }}" class="action-button edit">Editar</a>
        <a href="{{ route('excluir', ['id' => $personagem->id]) }}" class="action-button delete">Excluir</a>
        </div>
        
    </div>
@endforeach
    <!-- Adicione mais blocos de personagem conforme necessário -->

</body>
</html>