<style>
  .anime-container {
    text-align: center;
    margin: auto;
    max-width: 800px;
  }

  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
  }

  .card {
    flex: 1;
    min-width: 18rem;
    margin: 10px;
    text-align: center;
  }

  .card img {
    max-width: 100%;
    height: 200px;
  }

  .outer-container {
    text-align: center;
  }
</style>

<div class="anime-container">
  <div class="card-container">
    <div class="card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Naruto_logo.svg/2560px-Naruto_logo.svg.png" class="card-img-top" alt="NARUTO">
      <div class="card-body">
        <h5 class="card-title">NARUTO</h5>
        <p class="card-text">"Naruto" é um popular anime japonês que segue a jornada de Naruto Uzumaki, um jovem ninja que aspira se tornar o líder de sua aldeia, conhecido como Hokage. O enredo abrange temas de amizade, superação, e crescimento pessoal, enquanto Naruto enfrenta desafios, vilões poderosos, e busca o reconhecimento de seus companheiros ninjas. O anime é conhecido por suas intensas batalhas, personagens memoráveis, e exploração de valores importantes ao longo da vida de Naruto.</p>
        <a href="https://naruto.fandom.com/pt-br/wiki/Wiki_Naruto" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card">
      <img src="https://1000marcas.net/wp-content/uploads/2022/10/One-Piece-Logo.png" class="card-img-top" alt="ONE PIECE">
      <div class="card-body">
        <h5 class="card-title">ONE PIECE</h5>
        <p class="card-text">"One Piece" é um anime japonês que segue Monkey D. Luffy, um jovem com poderes de uma fruta do diabo que o transformou em um Homem Borracha. Ele parte em uma jornada para encontrar o tesouro lendário conhecido como One Piece e se tornar o Rei dos Piratas. Luffy forma uma tripulação diversificada, os Chapéus de Palha, e enfrenta desafios, piratas rivais e o Governo Mundial em busca de seus objetivos. O anime é conhecido por sua narrativa épica, personagens carismáticos e exploração de temas como amizade, liberdade e aventura.</p>
        <a href="https://onepiece.fandom.com/pt/wiki/P%C3%A1gina_principal" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card">
      <img src="https://i.pinimg.com/originals/60/a9/61/60a96199afa8469b7c3c46810ed86816.png" class="card-img-top" alt="DRAGON BALL Z">
      <div class="card-body">
        <h5 class="card-title">DRAGON BALL Z</h5>
        <p class="card-text">"Dragon Ball Z" é um anime que continua a história de "Dragon Ball". A trama se concentra em Goku, agora adulto, e seus amigos defendendo a Terra contra ameaças mais poderosas, incluindo seres intergalácticos e androides malignos. A série é marcada por intensas batalhas, poderes extraordinários (como as transformações Super Saiyajin) e o constante aprimoramento dos personagens. Goku e seus aliados buscam proteger o mundo e as esferas do dragão enquanto enfrentam inimigos cada vez mais formidáveis. O anime é conhecido por sua ação emocionante e impacto duradouro na cultura pop.</p>
        <a href="https://dragonball.fandom.com/pt-br/wiki/Dragon_Ball_Wiki" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Jujutsu_Kaisen_logo.png" class="card-img-top" alt="JUJUTSU KAISEN">
      <div class="card-body">
        <h5 class="card-title">JUJUTSU KAISEN</h5>
        <p class="card-text">"Jujutsu Kaisen" é um anime que segue Yuji Itadori, um estudante do ensino médio com habilidades atléticas excepcionais. Após encontrar um artefato amaldiçoado, ele se envolve em uma batalha entre amaldiçoados e feiticeiros amaldiçoados. Para proteger seus amigos e derrotar maldições, Yuji se junta a uma escola de feiticeiros, onde aprende técnicas de jujutsu. O anime destaca-se por suas intensas cenas de ação, animação de alta qualidade e exploração de temas como sacrifício, amizade e o peso das escolhas morais.</p>
        <a href="https://jujutsu-kaisen.fandom.com/wiki/Jujutsu_Kaisen" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card">
      <img src="https://static.jojowiki.com/images/thumb/c/c1/latest/20210215160328/JoJo%27s_Bizarre_Adventure_New_English_Logo.png/350px-JoJo%27s_Bizarre_Adventure_New_English_Logo.png" class="card-img-top" alt="JOJO'S BIZARRE ADVENTURE">
      <div class="card-body">
        <h5 class="card-title">JOJO'S BIZARRE ADVENTURE</h5>
        <p class="card-text">"JoJo's Bizarre Adventure" é um anime que segue a jornada da família Joestar ao longo de várias gerações. Cada parte da série apresenta um membro diferente da família enfrentando ameaças sobrenaturais usando poderes conhecidos como "Stands". Com elementos de ação, aventura e um estilo visual único, a série é reconhecida por sua narrativa extravagante, personagens distintos e influência duradoura na cultura pop.</p>
        <a href="https://jojo.fandom.com/wiki/Main_Page" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
  </div>
</div>

<?php
include_once("config.inc.php");


$sql = "SELECT * FROM post";
$query = mysqli_query($conn, $sql);


if ($query) {
    
    $animes = mysqli_fetch_all($query, MYSQLI_ASSOC);
} else {
    
    echo "Erro na consulta ao banco de dados.";
    exit();
}
?>

<style>
  
  .card img {
    max-width: 100%;
    height: 200px;
  }
</style>

<div class="anime-container">
  <div class="card-container">
    <?php
    foreach ($animes as $anime) {
    ?>
      <div class="card">
        <img src="<?php echo $anime['img']; ?>" class="card-img-top" alt="<?php echo $anime['nome']; ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $anime['nome']; ?></h5>
          <p class="card-text"><?php echo $anime['sino']; ?></p>
          <a href="<?php echo $anime['url']; ?>" class="btn btn-primary">Saiba Mais</a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
