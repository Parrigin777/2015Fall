<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
      background-image: url("http://cdn.wonderfulengineering.com/wp-content/uploads/2014/06/galaxy-wallpapers-15.jpg");
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
     color: white;
    }
    
    #list{
      color: black;
    }
    
    </style>

    <script type="text/javascript">
    var slideimages = new Array()
    slideimages[0] = new Image()
    slideimages[0].src ="http://cdn.attackofthecute.com/November-28-2011-19-12-19-1309900255thesefunnyanimals73704.jpeg"
    slideimages[1] = new Image()
    slideimages[1].src ="http://www.allemannmachine.com/wp-content/uploads/2014/04/husky.jpeg"
    slideimages[2] = new Image()
    slideimages[2].src ="http://puppytoob.toobnetwork.com/wp-content/uploads/sites/3/2015/08/0.jpg"
    slideimages[3] = new Image()
    slideimages[3].src ="http://www.skullsunlimited.com/userfiles/image/Husky(1).jpg"
    slideimages[4] = new Image()
    slideimages[4].src ="http://fc08.deviantart.net/fs42/i/2009/150/e/a/Cool_Husky_by_sibeworld.jpg"
    </script>  
   
 
   
  </head>
  
  <body>
      <div class=".col-xs-6 col-md-4">
        <h1>Hello, World!</h1>
          <div class="btn-group">
            <a class="btn btn-success" href="http://fall-2015-parrigin777.c9.io/testPage.php" role="button">Home
                    <i class="glyphicon glyphicon-home"></i>
            </a>
            <a class="btn btn-info" href="http://google.com/" role="button">Search
                    <i class="glyphicon glyphicon-globe"></i>
            </a>
            <button type="button" class="btn btn-primary">New
                    <i class="glyphicon glyphicon-pencil"></i>
            </button>
            <button type="button" class="btn btn-danger">Delete
                    <i class="glyphicon glyphicon-trash"></i>
            </button>
            
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-warning dropdown-togle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            <span class="caret"></span>
            </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Link 1
                        <i class="glyphicon glyphicon-off"></i></a></li>
                    <li><a href="#">Link 2
                        <i class="glyphicon glyphicon-cloud"></i></a></li>
                </ul>
            </div>
            </div>
            </div>
            
            <div class=".col-xs-6 col-md-4" id="list">
            <ul class="list-group">
                <li class="list-group-item"><span class="badge">14</span>One</li>
                <li class="list-group-item"><span class="badge">0</span>Two</li>
                <li class="list-group-item"><span class="badge">999+</span>Three</li>
                <li class="list-group-item"><span class="badge">7</span>Four</li>
                <li class="list-group-item"><span class="badge">*</span>Five</li>
            </ul>
            
            <div class="progress">
              <div class="progress-bar progress-bar-active progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (active)</span>
              </div>
              <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete (warning)</span>
              </div>
              <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                    <span class="sr-only">10% Complete (success)</span>
              </div>
              <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    <span class="sr-only">30% Complete (danger)</span>
              </div>
              </div>
            </div>
            </div>
        
      <div class=".col-xs-6 col-md-4">
      
        <img src="http://cdn.attackofthecute.com/November-28-2011-19-12-19-1309900255thesefunnyanimals73704.jpeg" id="slide" width=350 height=350 >
        
      </div>
      </div>
      
      
   
   <script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<4)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}

slideit()

</script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>