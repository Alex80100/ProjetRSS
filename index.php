<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/public/assets/css/formulaire.css">
  <title>projetRSS</title>
</head>

<body>
  <!------------------------- header------------------------------ -->
  <!-------------------------LOGO------------------------------ -->
  <img class="logo" src="public/assets/img/LOGO projetRSS.png" alt="Logo">
  <!------------------------- Navbar------------------------------ -->

  <div class="containernav">

    <nav class="navbar">
      <ul>
        <li><a href="">choix 1</a></li>
        <li><a href="">choix 2</a></li>
        <li><a href="">choix 3</a></li>
        <li><a href="">Préférence</a></li>
      </ul>
    </nav>
  </div>
  <!------------------------- Fin de Navbar------------------------------ -->
  <!-------------------------Formulaire------------------------------ -->

  <form>
    <h1>Vos préferences:</h1>
    <!-- <div class="containerform"> -->
    <div class="containerform">
      <div class="formulaire">
        <!-- <div> -->
        <input type="checkbox" id="sport" name="sport">
        <label for="sport">Foot</label>
        <!-- </div> -->

        <!-- <div> -->
        <input type="checkbox" id="sport" name="sport">
        <label for="horns">Rugby</label>
        <!-- </div> -->
        <!-- <div> -->
        <input type="checkbox" id="sport" name="sport">
        <label for="sport">Basket</label>
        <!-- </div> -->
        <!-- <div> -->
        <input type="checkbox" id="sport" name="sport">
        <label for="sport">Tennis</label>
        <!-- </div> -->
        <!-- <div> -->
        <input type="checkbox" id="sport" name="sport">
        <label for="sport">Formule1</label>
        <!-- </div> -->
        <div class="dark">
          <legend>Dark mode:</legend>


          <input type="radio" id="dark" name="dark" value="dark">
          <label for="dark">Oui</label>


          <input type="radio" id="dark" name="dark" value="dark">
          <label for="dark">Non</label>
        </div>
      </div>
    </div>
  </form>
  <!------------------------- Fin de formulaire------------------------------ -->
  <!------------------------- Footer------------------------------ -->
  <div class="footer">

    <img class="logofooter" src="public/assets/img/LOGO projetRSS.png" alt="">
    <h2>C'EST LA PASSION QUI PARLE</h2>
  </div>




</body>

</html>