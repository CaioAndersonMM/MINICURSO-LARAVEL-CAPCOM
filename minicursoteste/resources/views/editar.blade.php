<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/personagens.css">
</head>
<body>

<div class = "character-card">
  <h1>Editar Personagem</h1>
  <form action="{{route('atualizar.personagem', ['id' => $personagem->id]) }}" method = "post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input class="action-button" type="text" name = "nome" value="{{$personagem->nome}}">  
    <br><br>
    <input class="action-button" type="text" name = "descricao" value ="{{$personagem->descricao}}" >
    <br><br>
    <input class= "action-button" type="file" name = "imagem">
    <br><br>
    <button class="action-button-2" type = "submit">Editar</button>
  </form>
</div>
</body>
</html>