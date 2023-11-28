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

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_0.jpg" alt="Aatrox">
        <h2 class="character-name">Aatrox</h2>
        <p class="character-description">
            Uma entidade celestial caída, Aatrox busca vingança contra aqueles que o traíram.
        </p>
        <div class="button-container">
        <a href="{{ route('detalhes', ['id' => 1]) }}" class="action-button">Detalhes</a>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg" alt="Ahri">
        <h2 class="character-name">Ahri</h2>
        <p class="character-description">
            Uma Vastaya encantadora com uma predileção por almas humanas, Ahri é uma caçadora ardilosa.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_0.jpg" alt="Lux">
        <h2 class="character-name">Lux</h2>
        <p class="character-description">
            A Dama Luminosa, Lux manipula a luz para derrotar seus inimigos e proteger Demacia.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_0.jpg" alt="Jinx">
        <h2 class="character-name">Jinx</h2>
        <p class="character-description">
            A Louca dos Fogos de Artifício, Jinx espalha o caos com suas armas excêntricas em Piltover.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg" alt="Yasuo">
        <h2 class="character-name">Yasuo</h2>
        <p class="character-description">
            O Imperdoável, Yasuo é um espadachim habilidoso procurando limpar seu nome em Ionia.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zed_0.jpg" alt="Zed">
        <h2 class="character-name">Zed</h2>
        <p class="character-description">
            O Mestre das Sombras, Zed usa suas habilidades ninjas para eliminar seus inimigos.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ezreal_0.jpg" alt="Ezreal">
        <h2 class="character-name">Ezreal</h2>
        <p class="character-description">
            O Explorador Pródigo, Ezreal embarca em aventuras para encontrar artefatos poderosos.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Thresh_0.jpg" alt="Thresh">
        <h2 class="character-name">Thresh</h2>
            <p class="character-description">
            O Guardião das Correntes, Thresh coleciona almas perdidas enquanto atormenta suas vítimas.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card">
        <img class="character-image" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kaisa_0.jpg" alt="Kai'Sa">
        <h2 class="character-name">Kai'Sa</h2>
        <p class="character-description">
            Filha do Vazio, Kai'Sa luta para sobreviver usando tecnologia hextec e suas habilidades aprimoradas.
        </p>
        <div class="button-container">
            <button class="action-button">Detalhes</button>
        </div>
    </div>

    <div class="character-card"  style="background: rgba(0, 0, 0, 0);">
        <div class="button-container">
            <a href="{{route('create.personagem')}}" class="action-button" style="background: green;">Adicionar Personagem</a>
        </div>
    </div>

    <!-- Adicione mais blocos de personagem conforme necessário -->

</body>
</html>