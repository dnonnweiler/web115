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
        <h1>Common Metals</h1>
        
        <p>These represent some of the most common metals on earth, used by nearly everyone in their daily lives.</p>
         <div class="contentlower float">
            <img id="full" src="images/alu.jpg" alt="Common Metals">
        </div> 
        <div class="box" id="row2">
           <ul>
            <li><a onclick = "iron01()" href="#"><img src="images/aluthumb.jpg" alt="Aluminum Tiles"></a></li>
             <li><a onclick = "iron02()" href="#"><img src="images/brickthumb.jpg" alt="Compressed Cars"></a></li>
              <li><a onclick = "iron03()" href="#"><img src="images/copperthumb.jpg" alt="Copper Tubing"></a></li>
               <li><a onclick = "iron04()" href="#"><img src="images/ironthumb.jpg" alt="Iron Scrap"></a></li>
                <li><a onclick = "iron05()" href="#"><img src="images/leadthumb.jpg" alt="Lead Bricks"></a></li>
                 <li><a onclick = "iron06()" href="#"><img src="images/psethumb.jpg" alt="Odd colored Ferrous Metal"></a></li>
                  <li><a onclick = "iron07()" href="#"><img src="images/rawthumb.jpg" alt="Iron Ore"></a></li>
                   <li><a onclick = "iron08()" href="#"><img src="images/rimthumb.jpg" alt="Steel Car Rims"></a></li>
            </ul>     
</div>
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
