<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
    <div class="row">
      <h1>Hello World!</h1>
      <div class="col-sm-8">
    
    <a href="#" class="btn btn-success">
              <i class="glyphicon glyphicon-plus"></i>
              New Recprd</a>
    <a href="#" class="btn btn-danger">
        <i class="glyphicon glyphicon-trash"></i>
              Delete All</a>
              
    <div class="bs-example" data-example-id="simple-table">
    <table class="table table-striped table-hover">
      <caption>Optional table caption.</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>
    
    
    </div>
    
    <div class="col-sm-4">
    <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
        <span class="sr-only">45% Complete</span>
    </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(".progress-bar").animate({width: "75%"}, 2000);
      </script>
     
    </div>
    </body>
</html>