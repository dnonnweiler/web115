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
       <header>
        <?php include "bootheader.php"; ?>
        </header>
        
        <main>
            <div class="row">
                <div class="col-lg-12">
                    <div class="well-lg">This is a Large well that extends the entire width of the container.</div>
                            </div>
                         </div>
            <div class="row blue">
            <div class="col-sm-4"><div class="well-sm">Three</div></div>
            <div class="col-sm-4"><div class="well-sm">Small</div></div>
            <div class="col-sm-4"><div class="well-sm">Wells</div></div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="well">Medium</div>
            </div>
            <div class="col-sm-4"><div class="well-sm">Small</div></div>
            <div class="col-md-2">
                <div class="well">Medium</div>
            </div>
            <div class="col-sm-4"><div class="well-sm">Small</div></div>
        </div>
        </main>
    </div>
    
</body>
</html>