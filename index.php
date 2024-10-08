<?php 
include "header.php";
?>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="src/cs2.png" alt="Primeiro slide" width="100%" height="100%">
            <div class="container">
              <div class="carousel-caption text-left text-light">
                <h1>Counter-Strike 2</h1>
                <p>Counter-Strike 2 é a mais recente atualização da icônica série de jogos de tiro em primeira pessoa desenvolvida pela Valve, o jogo mantém a jogabilidade clássica de combate entre equipes, enquanto introduz melhorias significativas em gráficos, mecânicas e desempenho.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Se cadastre</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="src/cyberpunk.jpg" alt="Segundo slide" width="100%" height="100%">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Cyberpunk 2077</h1>
                <p>Cyberpunk 2077 é um RPG de ação desenvolvido pela CD Projekt Red, lançado em dezembro de 2020. Ambientado na vasta e futurista Night City, o jogo permite que os jogadores mergulhem em um mundo aberto repleto de tecnologia avançada, corrupção e diversidade cultural.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Jogue agora</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="src/Spider-Man-PS4.jpg" alt="Terceiro slide" width="100%" height="100%">
            <div class="container">
              <div class="carousel-caption text-left text-light">
                <h1>Spider-Man</h1>
                <p>Spider-Man é um aclamado jogo de ação e aventura desenvolvido pela Insomniac Games. O jogo coloca os jogadores na pele de Peter Parker, também conhecido como Homem-Aranha, enquanto ele enfrenta vilões icônicos de Nova York e tenta equilibrar sua vida como herói e cidadão..</p>
                <p><a class="btn btn-lg btn-primary" href="lista_jogos.php" role="button">Lista de jogos</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>

      <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="src/steam.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Steam</h2>
            <p>Principal plataforma de distribuição digital de jogos para PC, com milhares de títulos, suporte a mods, conquistas e uma comunidade ativa. Conhecida pelas promoções sazonais e pelo amplo catálogo.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="src/epic-games.256x256.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Epic Games</h2>
            <p>Loja digital lançada pela Epic Games, famosa por jogos gratuitos semanais e por títulos exclusivos. Oferece uma divisão de receita favorável para desenvolvedores.
            </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="src/origin.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Origin Games</h2>
            <p>Desenvolvedora e publicadora de grandes franquias como FIFA, The Sims e Battlefield. Conta com o serviço EA Play, que oferece benefícios exclusivos e acesso antecipado aos jogos.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Deadlock <span class="text-muted"><br>MOBA</span></h2>
            <p class="lead">Deadlock é o novo jogo da Valve, misturando elementos de hero shooters e MOBA. Com equipes de seis jogadores, cada personagem possui habilidades únicas, oferecendo uma jogabilidade rápida e dinâmica.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"  src="src/deadlock.png" alt="Deadlock">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">PUBG <span class="text-muted"> <br> Battle Royale</span></h2>
            <p class="lead">PUBG (PlayerUnknown's Battlegrounds) é um jogo de battle royale desenvolvido pela PUBG Corporation. Nele, 100 jogadores são lançados em uma ilha deserta e precisam lutar para ser o último sobrevivente. Com uma mistura de estratégia, sobrevivência e tiroteios intensos, o jogo oferece mapas variados e uma experiência cheia de adrenalina, onde cada partida é única.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"  src="src/pubg.jpg" alt="PUBG">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Rocket League <span class="text-muted"> <br>Futebol veicular</span></h2>
            <p class="lead">Rocket League é um jogo multiplayer de futebol com veículos, desenvolvido pela Psyonix. Os jogadores controlam carros turboalimentados para competir em partidas intensas e acrobáticas, combinando velocidade, habilidade e estratégia. Com modos variados, personalização de veículos e jogabilidade dinâmica, é ideal tanto para competições casuais quanto para partidas de eSports.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"   src="src/rocket.jpg" alt="Rocket League">
          </div>
        </div>

        <hr class="featurette-divider">

      </div>

      <?php 
      include 'footer.php';
      ?>
    </main>
  </body>
</html>
