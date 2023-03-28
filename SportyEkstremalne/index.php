<?php
    session_start();
    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
        $napis = "Profil";
    } else {
        $napis = "Logowanie";
    }
?>


<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sporty ekstremalne</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
    </head>
    <body class="glowny">
      <header>
      <h1>Strona główna</h1>
      </header>
      <div class="topnav" id="myTopnav">
      <nav>
      <ul>
        <li><a href="index.php">Strona główna</a>
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Sporty <i class="fa fa-caret-down"></i></button>  
            <div id="myDropdown" class="dropdown-content">
                <a href="spadochron.php">Spadochroniarstwo</a>
                <a href="skysurfing.php">Skysurfing</a>
                <a href="lotniarstwo.php">Lotniarstwo</a>
                <a href="windsurfing.php">Windsurfing</a>
                <a href="highlining.php">Highlining</a>
            </div>
          </div>         
          <a href="sporty.php">Konkursy</a>
          <a href="logowanie.php"><?php echo $napis ?></a>
          <a href="formularzkontaktowy.php">Formularz kontaktowy</a></li>
      </ul>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon2" onclick="myFunction2()">&#9776;</a>
    </nav>
  </div>
  <a href="skysurfing.php"><div class="hero-image">
        <div class="hero-text">
          <h1 style="font-size:50px">Sporty ekstremalne</h1>
        </div>       
      </div>
  </a>
        <div class="tekst">
        <p><b>Sporty ekstremalne</b> w potocznym rozumieniu to sporty, których uprawianie wiąże się z większym ryzykiem niż w innych dyscyplinach.</p>

            <p>Zazwyczaj wymagają ponadprzeciętnych zdolności fizycznych lub psychicznych oraz odpowiedniego przygotowania. Według definicji Słownika Języka Polskiego są to sporty uprawiane w trudnych warunkach.</p>
            
            <p>Joe Tomlinson w Encyklopedii Sportów Ekstremalnych, wydanej w 1997 roku zalicza do takich sportów: BASE jumping, Bungee Jumping, balonotniarstwo, skoki spadochronowe, spacery na linie, skysurfing, lotniarstwo kaskaderskie, lotniarstwo, skoki i loty narciarskie, wolne skoki z samolotu, szybownictwo, windsurfing, wolne nurkowanie (free diving), pływanie długodystansowe, regaty żeglarskie (dookoła świata, oceaniczne), nurkowanie z akwalungiem, surfing, kajakarstwo górskie, jazda wodna boso, skutery wodne, wyścigi łodzi motorowych, snorkling, żeglarstwo szybkie, wakeboarding, rajdy przygodowe, speleologia, rower górski, żeglarstwo na lądzie i lodzie, snowboard, speed biking, snowschoeing (rakiety śnieżne), speedskiing, wspinaczka, jazda na BMX, motocross, street luge, mountain boarding. </p>
            <div id="demo">
              <h4>Zawody w sportach ekstremalnych: </h4>
              
              <p>Co roku latem oraz zimą odbywają się zawody X Games. Na letnich zawodach obecny jest FMX, BMX, skateboarding oraz sporty samochodowe, podzielne na następujące dyscypliny: Moto X Step Up, Moto X Enduro, Moto X Speed & Style, Moto X Best Whip, Moto X Quarter Pipe, BMX Vert, BMX Park, BMX Dirt, BMX Big Air, Skateboard Vert, Skateboard Big Air, Skateboard Park, Skateboard Street, Skateboard/BMX Big Air Doubles, Off Road Truck Racing. Na zawodach zimowych obecne są natomiast narciarstwo, snowboarding oraz skutery śnieżne, również podzielone na dyscypliny: Ski SuperPipe, Mono Skier X, Ski Slopestyle, Ski Big Air, Snowboard SuperPipe, Snowboard Slopestyle, Snowboarder X, Snowboard Big Air, Snowmobile Long Jump, Snowmobile SnoCross, Snowmobile Speed & Style.</p>
              
              <p>Spośród dyscyplin obecnych na X Games jedynie Snowboard SuperPipe oraz Snowboard Slopestyle są dyscyplinami olimpijskimi. Ponadto, na Zimowych Igrzyskach Olimpijskich rozgrywane są zawody snowboardowe slalom gigant równoległy, slalom równoległy oraz Snowcross. Do dyscyplin olimpijskich należą także skoki narciarskie, kolarstwo górskie, bobsleje, jeździectwo oraz żeglarstwo, które również wymieniane są jako sporty ekstremalne lub sporty wysokiego ryzyka.</p>
              <button class="btntekst" type="button" onclick="loadDoc()">Informacje o ubezpieczeniu</button>
            </div>
        </div>
        <i onclick="scrollToTop()" id="scrollBtn" class="fa fa-sort-asc icon" title="Skocz na góre strony"></i>
        <footer>    
        <div class="flex-center">
          <a href="https://www.twitter.com/home"><i class="fa fa-twitter fa-4x icon-3d"></i></a>
          <a href="https://www.facebook.com"><i class="fa fa-facebook fa-4x icon-3d"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram fa-4x icon-3d"></i></a>
          <a href="https://www.google.com"><i class="fa fa-google fa-4x icon-3d"></i></a>
        </div>
    </footer>
    <script src="js/dropdown.js"></script>
    <script src="js/scrolltotop.js"></script>
    <script src="js/zmientekst.js"></script>
    </body>
</html>