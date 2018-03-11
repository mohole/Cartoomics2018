<?php
  include('votes.php');

function  renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara){
    return '<?php
    /**
    * Helper file | Votes
    * Stores in vars the number of votes casted for each character 
    */

    $sasuke = '.$sasuke.';
    $goku = '.$goku.';
    $it = '.$it.';
    $luffy = '.$luffy.';
    $darth = '.$darth.';
    $khaleesi = '.$khaleesi.';
    $pikachu = '.$pikachu.';
    $lara='.$lara.';
    ?>';
  }

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
          margin-bottom: 20px;
          color: #fff;
      }
      html{
          width: 100%;
          height: 100%;
          overflow-x:hidden;
      }
      a{
          position: relative;
          color: #fff;
          padding: 40px 10px 10px 10px;
          text-decoration: none;
      }
      a:hover{
          text-decoration: none;
          cursor: pointer;
      }
      .container div,.dart_fener-container div,.luffy_n-container div,
      .luffy_r-container div, .calisi-container div,.laracontainer div{
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
          cursor: pointer;
          background-color: #104ba9;          
          color: #fff;
      }
      
    </style>
</head>
<body>
  <!--Inizio Contenitore Vincitore/Votato-->
  <div class="contenitore-vincitore">
    <h1>GRAZIE PER AVER VOTATO!</h1>
    <div class="primo">

<?php
  if(isset($_POST['vote'])){
    $personaggio = $_POST['vote'];
    $votes_file = 'votes.php';
    $handle = fopen($votes_file, 'w') or die('Cannot open file:  '.$votes_file);

    switch($personaggio){
      case 'sasuke':
        include('inc/sasuke.txt'); ?>
        <p><b>Sasuke</b></p> <?php                            
        $sasuke++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'goku':
        include('inc/goku.txt'); ?>
        <p><b>Goku</b></p> <?php  
        $goku++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'it':
        include('inc/it.txt'); ?>
        <p><b>Pennywise</b></p> <?php  
        $it++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'pikachu':
        include('inc/pikachu.txt'); ?>
        <p><b>Pikachu</b></p> <?php  
        $pikachu++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'luffy':
        include('inc/luffy.txt'); ?>
        <p><b>Luffy</b></p> <?php  
        $luffy++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'darth':
        include('inc/darth.txt'); ?>
        <p><b>Darth Fener</b></p> <?php  
        $darth++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
      case 'khaleesi':
        include('inc/khaleesi.txt'); ?>
        <p><b>Khaleesi</b></p> <?php  
        $khaleesi++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break; 
     case 'lara':
        include('inc/lara.txt'); ?>
        <p><b>Lara Croft</b></p> <?php  
        $khaleesi++;
        $data = renderData($sasuke,$goku,$it,$luffy,$darth,$khaleesi,$pikachu,$lara);
        break;
    }

      fwrite($handle, $data);

    fclose($handle); 
  }
?>
      </div>
     
      <a href="index.php"> Torna alla home </a>
  </div>
    
</body>
</html>