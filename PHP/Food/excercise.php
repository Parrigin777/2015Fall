<?php
session_start();
    $name = 'Brandon Parrigin';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 21, CallorieGoal => 2500 );
    
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
  
    <style>
      
      body{
          background: #B2D1FF !important; ;
      }
      
      h1{
        font-family: "Times New Roman", Times, serif;
        text-decoration: underline;
        text-shadow: 2px 2px #E6B800;
      }
    </style>
  </head>
  <body>
    <div class="container">
            <h1><?=$message?></h1>
            <div class="well well-sm">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="index.php">Food</a></li>
                <li role="presentation" class="active"><a href="excercise.php">Excercise</a></li>
                <li role="presentation" class="active"><a href="sleep.php">Sleep</a></li>
            </ul>
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
            <a href="editExcercise.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="deleteExcercise.php" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($excercise)?></span>
            </a>
            <br />
            <table class="table table-condensed table-bordered table-hover">
              <thead>
                <tr class="active">
                  <th>#</th>
                  <th>Type of Exercise</th>
                  <th>Time</th>
                  <th>Callories Burned</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($excercise as $i => $meal): ?>
                <tr class="info">
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="editExcercise.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="deleteExcercise.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
        <div class="col-md-4 col-xs-10">
            <div class="alert alert-success" role="alert">
                You did well
            </div>
            <div class="alert alert-danger" role="alert">
                Oh no! You messed up.
            </div>

        </div>
      </div>
      
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>