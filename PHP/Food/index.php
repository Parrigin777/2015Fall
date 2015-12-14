<?php
session_start();
    $firstName = 'Brandon';
    $lastName = 'Parrigin';
    $message = "Hey $firstName!";
    $age = '21';
    $goal = '2500';
    $person = array( 'Name' => $firstName . ' ' . $lastName, 'Age' => $age, CallorieGoal => $goal );
    
    $food = $_SESSION['food'];
    if(!$food){
      $_SESSION['food'] = $food = array(
          array( 'Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), Callories => 500 ),
          array( 'Name' => 'Lunch', 'Time' => strtotime("now"), Callories => 800 ),
          array( 'Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), Callories => 400 ),
          array( 'Name' => 'Dinner', 'Time' => strtotime("6pm"), Callories => 1000 ),
          );
    }
    
    $excercise = $_SESSION['excercise'];
    if(!$excercise){
      $_SESSION['excercise'] = $excercise = array(
          array( 'Name' => 'Upper', 'Time' => strtotime("-1 hour"), Callories => 100 ),
          array( 'Name' => 'Lower', 'Time' => strtotime("now"), Callories => 500 ),
          array( 'Name' => 'Core', 'Time' => strtotime("now + 1 hour"), Callories => 200 ),
          
          );
    }
    
    $sleep = $_SESSION['sleep'];
    if(!$sleep){
      $_SESSION['sleep'] = $sleep = array(
          array( 'Name' => 'REM', 'Time' => strtotime("-1 hour"), Amount_Of_Time => 2 ),
          
          );
    }
        
    $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Callories'];
    }
    
    $burnTotal = 0;
    foreach ($excercise as $meal) {
        $burnTotal += $meal['Callories'];
    }
    
    
?>
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
      
      body{
          background: #00FF00 !important; ;
      }
      
      h1{
        font-family: "Age" !important; ;
        text-decoration: underline;
        color: black;
        
      }
      
      </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-xs-16 col-md-11">
            <h1><?=$message?></h1>
        </div>
        <div class="col-xs-1 col-md-1">
          <a class="btn btn-primary" href="home.php" role="button">Log Out</a>
        </div>
        </div>
            <div class="well well-sm">
            <div class="row">
            <div class="col-xs-14 col-md-10">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="index.php">Food</a></li>
                <li role="presentation" class="active"><a href="excercise.php">Excercise</a></li>
                <li role="presentation" class="active"><a href="sleep.php">Sleep</a></li>
            </ul>
            </div>
            <div class="social">
            <div class="col-xs-4 col-md-2">  
            <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i></a>
            </div>
            </div>
            </div>
            </div>
            
            <div class="panel panel-success">
                <div class="panel-heading">Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?></dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?></dd>
                        <dt>Goal</dt>
                        <dd><?=$person['CallorieGoal']?></dd>
                        <dt>Today's Intake</dt>
                        <dd><?=$total?></dd>
                        <dt>Callories Burned</dt>
                        <dd><?=$burnTotal?></dd>
                    </dl>
                </div>
            </div>
            
            
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="editMeal.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="deleteMeal.php" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($food)?></span>
            </a>
            <br/>
            
           <table class="table table-condensed table-bordered table-hover">
              <thead>
                <tr class="active">
                  <th>#</th>
                  <th>Name</th>
                  <th>Time</th>
                  <th>Callories</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($food as $i => $meal): ?>
                <tr class="info">
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="editMeal.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="deleteMeal.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$meal['Name']?></td>
                  <td><?=date("M d Y  h:i:sa", $meal['Time'])?></td>
                  <td><?=$meal['Callories']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table> 
        </div>
        
        <div class="col-xs-6 col-md-3 col-md-offset-1 col-xs-offset-1"> 
            <div class="demo">
              <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                <input class="typeahead tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);">
                <input class="typeahead tt-input" type="text" placeholder="Foods" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Arial; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                  <div class="tt-dataset tt-dataset-states">
                  </div>
                </div>
                </span>
            </div>
        </div>
        
      </div>
      
      <script>
        var states = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          local: $meal
        });
        
        $('#bloodhound .typeahead').typeahead({
          hint: true,
          highlight: true,
          minLength: 1
        },
        {
          name: 'foods',
          source: states
        });
      </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>