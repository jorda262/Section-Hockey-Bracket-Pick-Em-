<?php
include 'sectionValidation.php';

#ARRAY OF EVERY TEAM
$teams = array("Lakeville North", "Lakeville South", "Farmington","Rochester Century", "Owatonna", "Rochester JM", "Rochester Mayo", "Dodge County",
              "Eden Prairie", "Holy Family", "Minnetonka","Prior Lake", "Chaska", "Chanhassan", "Shakopee", "Apple Valley",
              "St. Thomas Academy", "Burnsville", "Eastview", "Eagan", "Rosemount", "Bloomington Jefferson", "Park Cottage Grove", "East Ridge",
              "Stillwater", "Hill Murray", "White Bear Lake", "Mounds View", "Woodbury", "Tartan", "Roseville", "North St. Paul",
              "Centennial", "Maple Grove", "Blaine", "Champlin Park", "Anoka", "Coon Rapids", "Spring Lake Park", "Osseo",
              "Edina", "Cretin Derham Hall", "Wayzata","Benilde St. Margaret", "St. Louis Park", "Armstrong Cooper", "Academy of Holy Angels", "Hopkins",
              "Elk River", "Duluth East", "Cloquet", "Grand Rapids", "Andover", "Duluth Marshall", "St. Francis", "Forest Lake",
              "Moorhead", "St. Michael Albertville", "Roseau", "Brainerd", "Bemiji", "Buffalo", "St. Cloud", "Rogers");

$divs = array("Section 1AA", "Section 2AA", "Section 3AA", "Section 4AA", "Section 5AA", "Section 6AA", "Section 7AA", "Section 8AA");

$i = 0;
foreach ($teams as $team)
{
  $div = $divs[($i/8)];
  $i++;
  $pdo = getPDO();
  $sql = "UPDATE ex_teams SET team_division=:division WHERE team_name=:name";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(":name", $team);
  $statement->bindValue(":division", $div);
  $statement->execute();
}
#SORT TEAMS ALPHABETICALLY
sort($teams);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
    <link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="assign2.css" rel="stylesheet">
    <link href ="sign.css" rel="stylesheet">
</head>
<body>
<!-- HEADER -->
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
               <p class="navbar-text">Welcome to <strong><a href ="section1AA.php" class="navbar-link">MN Puck Picks</a></strong>, <a href="signIn.php" class="navbar-link">Login</a> or <a href="signUp.php" class="navbar-link">Create new account</a></p>
            </div>
         </nav>
      </div>
   </div>
   <div id="logoRow" >
      <div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1> Sign-Up for the Section Tournament Challenge</h1>
            </div>
            <div class="col-md-4">
            </div>
         </div>
      </div>
   </div>
</header>


<!-- SIGN UP FORM -->
<div class="box">
  <div id = "verticalSpace">
    <form id="signup" method = "POST" action ="validation.php" >
        <div class="header">
            <h3>Sign Up</h3>
        </div>
        <div class="sep"></div>
        <div class="inputs">
            <input type="text" name ="firstName" placeholder="First-Name" style="width:100%;"/>
            <input type="text" name="lastName" placeholder="Last-Name" style="width:100%;"/>
            <input type="text" name= "userName" placeholder="User Name" style="width:100%;"/>
            <input type="email" name = "email" placeholder="Email" style="width:100%;"/>
            <input type="password" name ="password" placeholder="Password" style="width:100%;"/>
            <input type="password" name ="passwordConfirm" placeholder="Password Confirm" style="width:100%;"/>
            <select class="form-control" type="text" name= "favoriteTeam" id="team" placeholder="Favorite Team" style="width:100%;"/>
            <option value='' selected='selected' disabled>Favorite Team</option>
              <?php
                foreach ($teams as $value)
                {
                  echo "<option value='$value'>$value</option>";
                }
              ?>
            </select>
            <button type="submit" class="btn btn-primary" style="width:100%; background-color:black; border-color:black;">SIGN UP</button>
          </form>
        </div>
  </div>
</div>
<br>
<br>

<!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
