<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 1AA Picks</title>
    <link href='http://fonts.googleapis.com/css?family=Cookie|Cuprum' rel='stylesheet' type='text/css'>
    <link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="assign2.css" rel="stylesheet">
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
               <p class="navbar-text">Welcome to <strong><a href ="home.php" class="navbar-link">MN Puck Picks</a></strong>, <a href="signIn.php" class="navbar-link">Login</a> or <a href="signUp.php" class="navbar-link">Create new account</a></p>
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

   <div id="mainForm">
   <div class="container">
     <div class="row">
       <div class="col-md-8">
        <form>
             <div class="form-group row">
           <label for="example-text-input" class="col-2 col-form-label">First Name</label>
           <div class="col-10">
             <input class="form-control" type="text" id="firstName">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-search-input" class="col-2 col-form-label">Last Name</label>
           <div class="col-10">
             <input class="form-control" type="text" id="lastName">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-email-input" class="col-2 col-form-label">Email</label>
           <div class="col-10">
             <input class="form-control" type="email" id="email">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-url-input" class="col-2 col-form-label">Password</label>
           <div class="col-10">
             <input class="form-control" type="password" id="password">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-url-input" class="col-2 col-form-label">Password Confirm</label>
           <div class="col-10">
             <input class="form-control" type="password" id="passwordAgain">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-tel-input" class="col-2 col-form-label">User Name</label>
           <div class="col-10">
             <input class="form-control" type="text"  id="userName">
           </div>
         </div>
         <div class="form-group row">
           <label for="example-password-input" class="col-2 col-form-label">Favorite Team</label>
           <div class="col-10">
             <select class="form-control" type="text" id="team">

               <option>Benilde St. Margarets</option>
               <option>Blaine</option>
               <option>Centennial</option>
               <option>Duluth East</option>
               <option>Edina</option>
               <option>Elk River</option>
               <option>Eden Prairie</option>
               <option>Grand Rapids</option>
               <option>Hill Murray</option>
               <option>Holy Family</option>
               <option>Lakeville North</option>
               <option>Minnetonka</option>
               <option>Moorhead</option>
               <option>Roseau</option>
               <option>St. Thomas</option>
               <option>Stillwater</option>
               <option>Wayzata</option>
               <option>White Bear Lake</option>
             </select>
           </div>
         </div>
        </form>
       </div>
     </div>
   </div>
 </div>
</header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
