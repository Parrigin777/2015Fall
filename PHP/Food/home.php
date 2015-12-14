<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Health Tracker</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/jasny/bootstrap/master/dist/css/jasny-bootstrap.min.css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/jasny-bootstrap.min.css" rel="stylesheet">
   
    <link href="navmenu-reveal.css" rel="stylesheet">
    
    
    <style>
    
        @font-face {
        font-family: 'Age'; 
        src: url('/php/Fonts/Age.otf'); 
        }
        
        @font-face {
        font-family: 'AnticSlab'; 
        src: url('/php/Fonts/AnticSlab-Regular.ttf'); 
        }
        
        @font-face {
        font-family: 'Vonique'; 
        src: url('/php/Fonts/Vonique 92 Regular.otf'); 
        }
        
        body{
            background: white;
            
        }
        
        .header{
           font-family: "Vonique";
           color: #00FF00; 
           font-size:75px;
           text-align: center;
           text-decoration: underline;
        }
        
        .disclaimer{
           text-align: center;
           color: black; 
           font-size: 10px;
        }
        
        .head{
           font-family: "Vonique";
           color: #00FF00; 
           font-size:30px;
           text-align: center;
        }
        
        .text{
            font-family: "AnticSlab";
           color: black; 
           font-size:15px;
           
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container">
        <nav class="nav navbar-right">
            <a href="signUp.php" class="btn btn-success btn-lg active" role="button">Sign Up</a>
            <a href="logIn.php" class="btn btn-success btn-lg active" role="button">Log In</a>
        </nav>
    </div>
    </nav>
    
    <div class="container">
        <p class="header">Fitness Tracker</p>
        <p class="disclaimer">Do Not Use An Actual Email For An Account!</p>
    <br>
    <br>
    <div class="row">
      <div class="col-xs-6 col-md-4">
          <p class="head">Submit Food Intake!</p>
          <p class="text">Enter food that you have eaten throughout the day and track the number of callories you have take in!</p>
      </div>
      <div class="col-xs-6 col-md-4">
          <p class="head">Show Excercise Routines!</p>
          <p class="text">Document each time you do any form of excercise and how many callories were burned!</p>
      </div>
      <div class="col-xs-6 col-md-4">
          <p class="head">Track Sleep Cycles!</p>
          <p class="text">Display the different forms of sleep patterns that you experience throughout the night!</p>
      </div>
    </div>
    </div>
</body>
</html>