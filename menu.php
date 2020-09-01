<?php
    //On démarre une nouvelle session
    session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
     *de caractères vide*/
    

    try
{
	$bdd = new PDO('mysql:host=database;dbname=streamler', 'root', 'root');
}
//error
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
    //$bdd = new PDO('mysql:host=127.0.0.1;dbname=streamler', 'root', 'root');



   //  if(isset($_GET['id']) AND $_GET['id'] > 0) {
     
      
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a style="font-family: 'Londrina Shadow', cursive; font-size:3em" class="navbar-brand" href="index.php">STREAMLER.COM <i class="fa fa-gamepad" style="font-size:1em"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="random.php">Top 10 Games <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="random.php">Most Popular <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="filtre.php">Action</a> -->
          <a class="dropdown-item" href="filtre.php?genre=adventure">Adventure</a>
          <a class="dropdown-item" href="filtre.php?genre=arcade">Arcade</a>
          <a class="dropdown-item" href="filtre.php?genre=indie">Indie</a>
          <!-- <a class="dropdown-item" href="filtre.php?genre=fighting">Fighting</a> -->
          <a class="dropdown-item" href="filtre.php?genre=shooter">FPS</a>
          <a class="dropdown-item" href="filtre.php?genre=platform">Platform</a>
          <a class="dropdown-item" href="filtre.php?genre=puzzle">Puzzle</a>
          <a class="dropdown-item" href="filtre.php?genre=racing">Racing</a>
          <a class="dropdown-item" href="filtre.php?genre=rpg">RPG</a>
          <a class="dropdown-item" href="filtre.php?genre=simulation">Simulation</a>
          <a class="dropdown-item" href="filtre.php?genre=sport">Sports</a>
          <a class="dropdown-item" href="filtre.php?genre=strategy">Strategy</a>
          <a class="dropdown-item" href="filtre.php?genre=tactical">Tactical</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Platforms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="platefiltre.php?plateforme=pc">PC (Windows)</a>
          <a class="dropdown-item" href="platefiltre.php?plateforme=ps4">Playstation 4</a>
          <a class="dropdown-item" href="platefiltre.php?plateforme=xbox">Xbox</a>
          <a class="dropdown-item" href="platefiltre.php?plateforme=switch">Nintendo Switch</a>
          <a class="dropdown-item" href="platefiltre.php?plateforme=mac">Mac OSx</a>
        </div>
      </li>
    </ul>
      <?php 
        include 'search.php';
      ?>     
      <a class="btn btn-outline-primary" href="connexion.php" role="button">Log In</a>
      <a class="btn btn-outline-primary" href="inscription.php" role="button">Sign Up</a>
      <a class="btn btn-outline-primary" href="profil.php" role="button">profil</a>
    
  </div>
  <?php echo "Bonjour ".$_SESSION['pseudo'];
?>
</nav>


<footer class="page-footer font-small special-color-dark fixed-bottom">
        
        <div class="footer-copyright py-2 text-center">© 2020 Copyright:
        <a href="#"> streamler.com</a>
        <?php 
        if ($donnees['droit']=="admin"){
        echo '<a class="btn btn-outline-primary pull-right" href="admin.php" role="button">Admin</a>';
        }
        ?>
</footer>
