<?php include "Server/retrieve.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>SMARTBIKE</title>
    <style>
        html{
            scrollbar-width: normal;
            scrollbar-color: red, green;
        }
    
    </style>

</head>
<body>
  <!-- alert message for question topnav -->
  <div id="chat">
    <h4> <strong>Nouveau :</strong> si vous avez une question, pensez à utiliser le chat en bas à droite de votre écran.</h4>
  </div>

  <!-- create navbar -->
  <nav id="hamnav" style="">
    <div id="logo">
      <a href="index.php">
        <img id="img" src="images/logo.png" alt="logo">
      </a>

      <div id="search">
          <img src="images/searchs.png" id="search" alt="search">
      </div>

      <div id="icons">

        <a href="contact.php">
          <img src="images/tel.png" id="icon" alt="tel">
        </a>
        <a href="card.php?prod_id">
          <img src="images/card.png" id="icon" alt="card">
        </a>
      </div>
    </div>

    <label for="hamburger">&#9776;</label>
    <input type="checkbox" id="hamburger">
    <div id="hamitems">
      <?php
        foreach($categorie as $catname){
          ?> <a href="Produits.php" style="color:black; font-size:16px;"><?php echo $catname['nom_categorie'] ?></a> <?php
        }
      ?>

    </div>
  </nav>


