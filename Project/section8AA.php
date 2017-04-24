<?php
  session_start();

  include 'section.class.php';
  $section8 = new Section("Moorhead", "St. Michael Albertville", "Roseau",
                "Brainerd", "Bemiji", "Buffalo", "St. Cloud", "Rogers");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 8AA Picks</title>
    <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
    <link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="assign2.css" rel="stylesheet">
    <link rel = "stylesheet" href = "bracket/bracket.css">
</head>

<body>

<header>
   <div id="topHeaderRow" >
      <div class="container">
         <nav class="navbar navbar-inverse " role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <?php
               if(isset($_SESSION['username']))
               {
                 $user = $_SESSION['username'];
                 echo "<p class='navbar-text'> <strong>{$user}</strong>, Welcome to <strong><a href ='section1AA.php' class='navbar-link'>MN Puck Picks</a></strong>,
                 <a href='destroy.php' class='navbar-link'>Logout</a> <a href='deleteUser.php' class='navbar-link' style='margin-left: 36em;'>[Delete Your Account]</a> <a href='updateAccount.php' class='navbar-link'>[Update Your Account]</a></p>";
               }
               else
               {
                 echo "<p class='navbar-text'>Welcome to <strong><a href ='section1AA.php' class='navbar-link'>MN Puck Picks</a></strong>,
                 <a href='signIn.php' class='navbar-link'>Login</a> or <a href='signUp.php' class='navbar-link'>Create new account</a></p>";
               }
               ?>
            </div>
         </nav>
      </div>
   </div>

   <div id="logoRow" >
      <div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>Section Tournament Challenge</h1>
            </div>
            <div class="col-md-4">
            </div>
         </div>
      </div>
   </div>
   <div id="mainNavigationRow" >
      <div class="container">
         <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
             <ul class="nav navbar-nav">
               <li><a href="home.php">Home</a></li>
               <li><a href="section1AA.php">Section 1AA</a></li>
               <li><a href="section2AA.php">Section 2AA</a></li>
               <li><a href="section3AA.php">Section 3AA</a></li>
               <li><a href="section4AA.php">Section 4AA</a></li>
               <li><a href="section5AA.php">Section 5AA</a></li>
               <li><a href="section6AA.php">Section 6AA</a></li>
               <li><a href="section7AA.php">Section 7AA</a></li>
               <li class="active"><a href="section8AA.php">Section 8AA</a></li>
             </ul>
            </div>
         </nav>
      </div>
   </div>
</header>
<div class ="container">
  <main id="tournament">
  	<ul class="round round-1">
  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="1seed8" class="btn btn-primary btn-md round1 slot1" value="1" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getFirst();?></button> <span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="8seed8" class="btn btn-primary btn-md round1 slot2" value="2" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getEighth();?></button> <span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="4seed8" class="btn btn-primary btn-md round1 slot3" value="3" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getFourth();?></button><span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="5seed8" class="btn btn-primary btn-md round1 slot4" value="4" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getFifth();?></button> <span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="2seed8" class="btn btn-primary btn-md round1 slot5" value="5" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getSecond();?></button> <span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="7seed8" class="btn btn-primary btn-md round1 slot6" value="6" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getSeventh();?></button> <span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="3seed8" class="btn btn-primary btn-md round1 slot7" value="7" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getThird();?></button> <span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="6seed8" class="btn btn-primary btn-md round1 slot8" value="8" style="width:200px; background-color: black; border-color:black"><?php echo $section8->getSixth();?></button> <span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>
  	</ul>
  	<ul class="round round-2">
  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

          <li class="game game-top winner"><button id="8game1" class="btn btn-primary btn-md round2 slot1" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="8game2" class="btn btn-primary btn-md round2 slot2" value="2" style="width:200px; background-color: black; border-color:black"></button><span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="8game3" class="btn btn-primary btn-md round2 slot3" value="3" style="width:200px; background-color: black; border-color:black"></button><span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="8game4" class="btn btn-primary btn-md round2 slot4" value="4" style="width:200px; background-color: black; border-color:black"></button><span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  	</ul>
  	<ul class="round round-3">
  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>

  		<li class="game game-top winner"><button id="8game5" class="btn btn-primary btn-md round3 slot1" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span></li><span></span></li>
  		<li class="game game-spacer">&nbsp;</li>
  		<li class="game game-bottom winner"><button id="8game6" class="btn btn-primary btn-md round3 slot2" value="2" style="width:200px; background-color: black; border-color:black"></button><span></span></li><span></span></li>

  		<li class="spacer">&nbsp;</li>
  		<li class="spacer">&nbsp;</li>
  	</ul>
  	<ul class="round round-4">
  		<li class="game game-top winner"><button id="8game7" class="btn btn-primary btn-md round4 slot1" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span></li><span></span></li>
  	</ul>
  </main>
  <?php
    if(isset($_SESSION['username']))
    {
      echo "<button class='btn btn-primary' style='background-color:black; width:10em; margin-left:30em; margin-right:1em; border-color:black'>RESET</button><button class='btn btn-primary' style='background-color:black; width:10em; border-color:black'>SAVE</button>";
    }
    else
    {
      echo "<button class='btn btn-primary' style='background-color:black; width:10em; margin-left:32em; border-color:black'>RESET</button>";
    }
  ?>
  </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
      <script type="text/javascript">
    /* For each round */
    $('button.round2').hide();
    $('button.round3').hide();
    $('button.round4').hide();



    /* For first round */
    $('button.round1').click(function() {
        var rv = $(this)[0].getAttribute('value');
        var nrv = Math.floor((+rv+1)/2);
        $('button.round2.slot'+nrv).html($(this).html());
        $('button.round2.slot'+nrv).show();
    });
    /* For second round */
    $('button.round2').click(function() {
        var rv = $(this)[0].getAttribute('value');
        var nrv = Math.floor((+rv+1)/2);
        $('button.round3.slot'+nrv).html($(this).html());
        $('button.round3.slot'+nrv).show();
    });
    /* For third round */
    $('button.round3').click(function() {
        var rv = $(this)[0].getAttribute('value');
        var nrv = Math.floor((+rv+1)/2);
        $('button.round4.slot'+nrv).html($(this).html());
        $('button.round4.slot'+nrv).show();
    });
      </script>
</body>
</html>
