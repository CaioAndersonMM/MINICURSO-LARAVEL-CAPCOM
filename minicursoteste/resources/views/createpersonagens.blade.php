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
  <h1>Adicionar Personagem</h1>
  <form action="{{route('adicionar.personagem')}}" method = "post" enctype="multipart/form-data">
    @csrf
    <input class="action-button" type="text" name = "nome" placeholder="Nome do Personagem">  
    <br><br>
    <input class="action-button" type="text" name = "descricao" placeholder ="Descrição do Personagem" >
    <br><br>
    <input class= "action-button" type="file" name = "imagem">
    <br><br>
    <button class="action-button-2" type = "submit"> Adicionar</button>
  </form>
</div>
</body>
</html>