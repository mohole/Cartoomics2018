<?php
  include('votes.php');
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cartoomics - Mohole</title>
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
  <link rel="stylesheet" href="disegni/sasuke-style.css">
  <link rel="stylesheet" href="disegni/goku-style.css">
  <link rel="stylesheet" href="disegni/pennywise-style.css">
  <link rel="stylesheet" href="disegni/pikachu.css">
  <link rel="stylesheet" href="disegni/dart-fener.css">
  <link rel="stylesheet" href="disegni/luffy_normal.css">
  <link rel="stylesheet" href="disegni/calisi.css">
  <link rel="stylesheet" href="disegni/lara-style.css">
  <style>
      *{
          padding: 0;
          margin: 0;
          font-family: kelly slab, sans-serif;
      }
      h1,h2,h3,h4,h5,h6{
          text-align: center;
          font-family: kelly slab;
      }
      h1{
          color: #fff;
      }
      html{
          width: 100%;
          height: 100%;
          overflow-x:hidden;
      }
      .container div,.dart_fener-container div,.luffy_n-container div,
      .luffy_r-container div,.calisi-container div, .laracontainer div{
          position: absolute;
      }
      div{
          position: relative;
      }
      /*Inizio css contenitore Vincitore/Votato*/
      .primo{
          transform: scale(1.5);
          margin: 20px auto 50px;

      }
      .contenitore-vincitore{
          background: #C33764;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to bottom, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to bottom, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          display: flex;
          flex-direction: column;
          align-items: center;
          padding: 25px;
          border: 1px solid black; 
          margin: 0 auto 20px;
      }
      .contenitore-vincitore p {
          text-align: center;
          font-size: 22px;
          color: #fff;
      }
      /*Fine Contenitore*/
      .container-fluid{
          max-width: 960px;
	      display: flex;
          flex-wrap: wrap;
          margin: 10px auto;
          justify-content:space-between;
          padding-bottom: 30px;
      }
      @media (max-width:630px){
          .container-fluid {
	        flex-direction: column;
            align-items: center;
          }
      }
      form{
          text-align: center;
      }
      .btn{
          width: 150px;
          padding: 5px 0px;
          background-color: #fff;
          border: 1px solid #104ba9;
          color: #104ba9;
          transition: all 0.2s ease-in;
      }
      .btn:hover{
          background-color: #104ba9;          
          color: #fff;
          cursor: pointer;
      }
      
    </style>
</head>
<body>
  <?php
    $array = compact('sasuke', 'goku', 'it','pikachu','luffy','darth','khaleesi','lara');
    //var_dump($array);

    $max_key = $max_value = null;

    foreach ($array as $key => $value) {
      if (is_null($max_value) || $value > $max_value) {
        $max_key = $key; $max_value = $value;
      }
    }
  ?>
    <!--Inizio Contenitore Vincitore/Votato-->
    <div class="contenitore-vincitore">
        <h1>IL PIU' VOTATO</h1>
          <!--Parte in teoria dinamica-->
          <div class="primo">
          <?php
            switch($max_key){
              case 'sasuke':
                include ('inc/sasuke.txt');
                break;
              case 'goku':
                include ('inc/goku.txt');
                break;
              case 'it':
                include ('inc/it.txt');
                break;
              case 'pikachu':
                include ('inc/pikachu.txt');
                break;
              case 'darth':
                include ('inc/darth.txt');
                break;
              case 'luffy':
                include ('inc/luffy.txt');
                break;
              case 'khaleesi':
                include ('inc/khaleesi.txt');
                break;
              case 'lara':
                include ('inc/lara.txt');
                break;

            }
          ?>
        </div>
          <!--Fine parte dinamica-->
        <p><b><?php echo ucfirst($max_key) ?></b></p>
        <p>Numeri click: <?php echo $max_value   ?></p>
    </div>
    <!--Fine box il più votato-->
    <h2>Vota il tuo preferito!</h2>
    <div class="container-fluid">
        <div id="pg-pikachu"> 
            <?php include('inc/pikachu.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="pikachu">Pikachu</button>
            </form>
        </div>
        <div id="pg-luffy"> 
            <?php include('inc/luffy.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="luffy">Luffy</button>
            </form>
        </div>
        <div id="pg-khaleesi"> 
            <?php include('inc/khaleesi.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="khaleesi">Khaleesi</button>
            </form>
        </div>
        <div id="pg-dart"> 
            <?php include('inc/darth.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="darth">Darth Fener</button>
            </form>
        </div> 
        <div id="pg-penny"> 
            <?php include('inc/it.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="it">Pennywise</button>
            </form>
        </div>
        <div id="pg-lara">  
              <?php include('inc/lara.txt'); ?>      
              <form action="castvote.php" method="post">
                  <button class="btn" type="submit" name="vote" value="lara">Lara Croft</button>
              </form>
        </div>
        <div id="pg-goku">  
              <?php include('inc/goku.txt'); ?>      
              <form action="castvote.php" method="post">
                  <button class="btn" type="submit" name="vote" value="goku">Goku</button>
              </form>
        </div>
        <div id="pg-sasuke">    
            <?php include('inc/sasuke.txt'); ?>
            <form action="castvote.php" method="post">
                <button class="btn" type="submit" name="vote" value="sasuke">Sasuke</button>
            </form>

        </div>
        
    </div>
</body>
</html>