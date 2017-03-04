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
        <h1>Heavy Metals</h1>
        
        <p>If not handled properly, Heavy Metals are known to cause severe side effects, including hearing loss and sore neck</p>
        
        <div class="box" id="column1">
           <ul>
            <li><a onclick = "heavy01()" href="#"><img src="images/acdcthumb.jpg" alt="AC\DC Rock Band"></a></li>
             <li><a onclick = "heavy02()" href="#"><img src="images/avatarthumb.jpg" alt="Avatar Death Metal Band"></a></li>
              <li><a onclick = "heavy03()" href="#"><img src="images/blacksabthumb.jpg" alt="Black Sabbath Early Metal Band"></a></li>
               <li><a onclick = "heavy04()" href="#"><img src="images/diothumb.jpg" alt="Dio, Godfather of all Metal"></a></li>
                <li><a onclick = "heavy05()" href="#"><img src="images/disturbedthumb.jpg" alt="Disturbed, industrial metal band"></a></li>
                 <li><a onclick = "heavy06()" href="#"><img src="images/ironmaidenthumb.jpg" alt="Iron Maiden, Early Metal band"></a></li>
                  <li><a onclick = "heavy07()" href="#"><img src="images/megadeththumb.jpg" alt="Megadeth one of the three cornerstones of Metal"></a></li>
                   <li><a onclick = "heavy08()" href="#"><img src="images/metallicathumb.jpg" alt="Metallica most famous metal band"></a></li>
            </ul>     
</div>
        <div class="contentlower float">
            <img id="full" src="images/acdc.jpg" alt="Heavy Metals">
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
