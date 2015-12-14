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
        
        .text{
           font-family: "AnticSlab";
           color: #00FF00; 
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
    <div class="form-group has-success">
      <label class="control-label" for="inputSuccess1">First Name:</label>
      <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="First Name">
    </div>
    <div class="form-group has-success">
      <label class="control-label" for="inputSuccess1">Last Name:</label>
      <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="Last Name">
    </div>
    <div class="form-group has-success">
      <label class="control-label" for="inputSuccess1">E-Mail:</label>
      <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" placeholder="E-Mail">
    </div>
    
    <div class="form-group has-success">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <a href="logIn.php" class="btn btn-success" role="button">Submit</a>
    
    </div>
</body>
</html>