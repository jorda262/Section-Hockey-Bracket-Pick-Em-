<?php
  session_start();
  include 'databaseUtilities.php';
  include 'section.class.php';
  $section1 = new Section("Lakeville North", "Lakeville South", "Farmington","Rochester Century", "Owatonna", "Rochester JM", "Rochester Mayo", "Dodge County");
  $autoFill = '';

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $game1 = $_POST['1game1'];
    $game2 = $_POST['1game2'];
    $game3 = $_POST['1game3'];
    $game4 = $_POST['1game4'];
    $game5 = $_POST['1game5'];
    $game6 = $_POST['1game6'];
    $game7 = $_POST['1game7'];
    $section = 'section1';
    if((isset($game1) && !empty($game1)) && (isset($game2) && !empty($game2)) && (isset($game3) && !empty($game3)) && (isset($game4)
    && !empty($game4)) && (isset($game5) && !empty($game5)) && (isset($game6) && !empty($game6)) && (isset($game7) && !empty($game7)))
    {
      $username = $_SESSION['username'];
      insertSectionTester($section, $username, $game1, $game2, $game3, $game4, $game5, $game6, $game7);
      header('Location: section2AA.php');
    }
    else
    {
      header('Location: section1AA.php');
    }
  }

  if(isset($_SESSION['username']))
  {
    $username = $_SESSION['username'];
    $section = 'section1';
    if(rowEmpty($section, $username))
    {
      # if empty DO NOTHING
    }
    else
    {
      $games = getRow($section, $username);
      $autoFill .= "$('button.round2.slot1').html('{$games['game1']}');".
                   "$('button.round2.slot1').show();".
                   "$('input.round2.slot1').val('{$games['game1']}');".
                   "$('button.round2.slot2').html('{$games['game2']}');".
                   "$('button.round2.slot2').show();".
                   "$('input.round2.slot2').val('{$games['game2']}');".
                   "$('button.round2.slot3').html('{$games['game3']}');".
                   "$('button.round2.slot3').show();".
                   "$('input.round2.slot3').val('{$games['game3']}');".
                   "$('button.round2.slot4').html('{$games['game4']}');".
                   "$('button.round2.slot4').show();".
                   "$('input.round2.slot4').val('{$games['game4']}');".
                   "$('button.round3.slot1').html('{$games['game5']}');".
                   "$('button.round3.slot1').show();".
                   "$('input.round3.slot1').val('{$games['game5']}');".
                   "$('button.round3.slot2').html('{$games['game6']}');".
                   "$('button.round3.slot2').show();".
                   "$('input.round3.slot2').val('{$games['game6']}');".
                   "$('button.round4.slot1').html('{$games['game7']}');".
                   "$('button.round4.slot1').show();".
                   "$('input.round4.slot1').val('{$games['game7']}');";

    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 1AA Picks</title>
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
               <li class="active"><a href="section1AA.php">Section 1AA</a></li>
               <li><a href="section2AA.php">Section 2AA</a></li>
               <li><a href="section3AA.php">Section 3AA</a></li>
               <li><a href="section4AA.php">Section 4AA</a></li>
               <li><a href="section5AA.php">Section 5AA</a></li>
               <li><a href="section6AA.php">Section 6AA</a></li>
               <li><a href="section7AA.php">Section 7AA</a></li>
               <li><a href="section8AA.php">Section 8AA</a></li>
             </ul>
            </div>
         </nav>
      </div>
   </div>
</header>
<form style='margin:0px; padding:0px;' method="POST" action="section1AA.php">
<div class ="container">
<main id="tournament">
	<ul class="round round-1">
		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="1seed1" type='button' class="btn btn-primary btn-md round1 slot1" name="<?php echo $section1->getFirst();?>" value="1" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getFirst();?></button> <span></span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="8seed1" type='button' class="btn btn-primary btn-md round1 slot2" name="<?php echo $section1->getEighth();?>" value="2" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getEighth();?></button> <span></span></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="4seed1" type='button' class="btn btn-primary btn-md round1 slot3" name="<?php echo $section1->getFourth();?>" value="3" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getFourth();?></button><span></span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="5seed1" type='button' class="btn btn-primary btn-md round1 slot4" name="<?php echo $section1->getFifth();?>" value="4" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getFifth();?></button> <span></span></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="2seed1" type='button' class="btn btn-primary btn-md round1 slot5" name="<?php echo $section1->getSecond();?>" value="5" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getSecond();?></button> <span></span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="7seed1" type='button' class="btn btn-primary btn-md round1 slot6" name="<?php echo $section1->getSeventh();?>" value="6" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getSeventh();?></button> <span></span></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="3seed1" type='button' class="btn btn-primary btn-md round1 slot7" name="<?php echo $section1->getThird();?>" value="7" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getThird();?></button> <span></span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="6seed1" type='button' class="btn btn-primary btn-md round1 slot8" name="<?php echo $section1->getSixth();?>" value="8" style="width:200px; background-color: black; border-color:black"><?php echo $section1->getSixth();?></button> <span></span></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-2">
		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

    <li class="game game-top winner"><button id ="1game1" type='button' class="btn btn-primary btn-md round2 slot1" name="" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game1" class="round2 slot1"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="1game2" type='button' class="btn btn-primary btn-md round2 slot2" name="" value="2" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game2" class="round2 slot2"></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="1game3" type='button' class="btn btn-primary btn-md round2 slot3" value="3" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game3" class="round2 slot3"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="1game4" type='button' class="btn btn-primary btn-md round2 slot4" value="4" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game4" class="round2 slot4"></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

	</ul>
	<ul class="round round-3">
		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>

		<li class="game game-top winner"><button id ="1game5" type='button' class="btn btn-primary btn-md round3 slot1" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game5" class="round3 slot1"></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner"><button id ="1game6" type='button' class="btn btn-primary btn-md round3 slot2" value="2" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game6" class="round3 slot2"></li>

		<li class="spacer">&nbsp;</li>
		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="game game-top winner"><button id ="1game7" type='button' class="btn btn-primary btn-md round4 slot1" value="1" style="width:200px; background-color: black; border-color:black"></button><span></span><input name="1game7" class="round4 slot1"></li>
	</ul>
</main>
<?php
  if(isset($_SESSION['username']))
  {
    echo "<button id='reset' type='button' class='btn btn-primary' style='background-color:black; width:10em; margin-left:30em; margin-right:1em; border-color:black'>Reset</button><input type='submit' class='btn btn-primary' style='background-color:black; width:10em; border-color:black'>";
  }
  else
  {
    echo "<button id='reset' type='button' class='btn btn-primary' style='background-color:black; width:10em; margin-left:32em; border-color:black'>Reset</button>";
  }
?>
</div>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  /* For each round */
  $('button.round2').hide();
  $('button.round3').hide();
  $('button.round4').hide();
  $('input.round2').hide();
  $('input.round3').hide();
  $('input.round4').hide();
  <?php echo $autoFill; ?>

  /* For first round */
  $('button.round1').click(function() {
      var rv = $(this)[0].getAttribute('value');
      var rv2;
      if (parseFloat(rv) % 2 == 0)
      {rv2 = parseFloat(rv)-1;}
      else
      {rv2 = parseFloat(rv) + 1;}

      var nrv = Math.floor((+rv+1)/2);
      $('button.round2.slot'+nrv).html($(this).html());
      $('button.round2.slot'+nrv).show();
      $('input.round2.slot'+nrv).val($(this).html());
  });
  /* For second round */
  $('button.round2').click(function() {
      var rv = $(this)[0].getAttribute('value');
      var rv2;
      if (parseFloat(rv) % 2 == 0)
      {rv2 = parseFloat(rv)-1;}
      else
      {rv2 = parseFloat(rv) + 1;}
      var nrv = Math.floor((+rv+1)/2);
      $('button.round3.slot'+nrv).html($(this).html());
      $('button.round3.slot'+nrv).show();
      $('input.round3.slot'+nrv).val($(this).html());

  });
  /* For third round */
  $('button.round3').click(function() {
      var rv = $(this)[0].getAttribute('value');
      var nrv = Math.floor((+rv+1)/2);
      $('button.round4.slot'+nrv).html($(this).html());
      $('button.round4.slot'+nrv).show();
      $('input.round4.slot'+nrv).val($(this).html());
  });

  $('#reset').click(function() {
    $('button.round2.slot1').hide();
    $('button.round2.slot2').hide();
    $('button.round2.slot3').hide();
    $('button.round2.slot4').hide();
    $('button.round3.slot1').hide();
    $('button.round3.slot2').hide();
    $('button.round4.slot1').hide();
    $('input.round2.slot1').val(0);
    $('input.round2.slot2').val(0);
    $('input.round2.slot3').val(0);
    $('input.round2.slot4').val(0);
    $('input.round3.slot1').val(0);
    $('input.round3.slot2').val(0);
    $('input.round4.slot1').val(0);
  });
    </script>

</body>
</html>
