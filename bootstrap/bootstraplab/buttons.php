<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Learning Bootstrap</title>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="bootlab.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
</head>

<body>
    <div class="container">
        <?php include "bootheader.php"; ?>
       <h1>Buttons</h1>
       <hr>
       <div>
        <a href="#"><button  type="button" class="btn btn-default">Plain</button></a>
        <a href="#"><button type="button" class="btn btn-primary">Some Color</button></a>
        <a href="#"><button type="button" class="btn btn-success">Green Means Go!</button></a>
        <a href="#"><button type="button" class="btn btn-xs btn-info">Small info</button></a>
        <a href="#"><button type="button" class="btn btn-md btn-warning">Attention</button></a>
        <a href="#"><button type="button" class="btn btn-lg btn-danger">Big Alert</button></a>
        <a href="#"><button type="button" class="btn btn-link">No Border</button>   </a>
        <a href="#"><button type="button" class="btn btn-block btn-link">Block</button>   </a>
        </div>    
        <div class="btn-group">
            <div class="btn-group">
                <a href="#"><button type="button" class="btn btn-danger">Red means Stop!</button></a></div>
             <div class="btn-group">
                 <a href="#"><button type="button" class="btn btn-warning">Yellow means speed up!</button></a></div>
              <div class="btn-group">
               <a href="#"><button type="button" class="btn btn-success">Green Means Go!</button></a>
                 </div>
            
        </div>
        <div class="btn-group-vertical">
           <div class="btn-group">
               <a href="#"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-forward"></span><span class="label label-default">Go!</span></button></a></div>
            <div class="btn-group">
                <a href="#"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pause"></span><span class="label label-default">Wait!</span></button></a></div>
            <div class="btn-group">
                <a href="#"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-stop"></span><span class="label label-default">STOP!</span></button></a></div>
        </div>
         <div class="btn-group-justified">
           <div class="btn-group">
               <a href="#"><button type="button" class="btn btn-success">Green Means Go!</button></a></div>
            <div class="btn-group">
                <a href="#"><button type="button" class="btn btn-warning">Yellow means speed up!</button></a></div>
            <div class="btn-group">
                <a href="#"><button type="button" class="btn btn-danger">Red means Stop!</button></a></div>
        </div>
        <div class="btn-group">
            <div class="btn-group">
                <button type="button" class="btn-warning btn dropdown-toggle" data-toggle="dropdown">Warning<span class="badge">1</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Peekaboo!</a></li>
                </ul>
            </div>
        </div>
        
       
       
        
       
    </div>
</body>
</html>