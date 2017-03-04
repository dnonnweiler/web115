<!DOCTYPE html>
<html lang="en">
<head>
      <script src="project31.js" type="text/javascript"></script>
   <link rel="stylesheet" href="project.css" type="text/css">
    <meta charset="UTF-8">
    <title>3-1-17 Project</title>
</head>
<body>
  <div id="wrapper">
   <header>
      
       <?php require ("header.php"); ?>
      
   </header>
   
    <main>
       <div class="content">
        <h1>Precious Metals</h1>
        
        <p>Precious metals are a highly sought after resource in many nations, their value is generally measured by the purity of the material.</p>
        <div class="box" id="row1">
           <ul>
            <li><a onclick = "precious01()" href="#"><img src="images/cadiumthumb.jpg"></a></li>
             <li><a onclick = "precious02()" href="#"><img src="images/chromethumb.jpg"></a></li>
              <li><a onclick = "precious03()" href="#"><img src="images/cobaltthumb.jpg"></a></li>
               <li><a onclick = "precious04()" href="#"><img src="images/goldbarthumb.jpg"></a></li>
                <li><a onclick = "precious05()" href="#"><img src="images/keysthumb.jpg"></a></li>
                 <li><a onclick = "precious06()" href="#"><img src="images/palladiumthumb.jpg"></a></li>
                  <li><a onclick = "precious07()" href="#"><img src="images/platthumb.jpg"></a></li>
                   <li><a onclick = "precious08()" href="#"><img src="images/silverthumb.jpg"></a></li>
            </ul>     
</div>
        </div>
       <div class="contentlower">
            <img id="full" src="images/cadium.jpg" alt="Precious Metals">
        </div> 
    </main>
    
    
    <footer>
    <div class="footer">
       
    <?php
        include "footer.php"; 
    ?>
    
    </div>
     </footer>
     
    </div>
</body>
</html>
