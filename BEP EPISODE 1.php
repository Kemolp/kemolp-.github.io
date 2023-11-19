<?php include "connexion1.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> KEMOLP </title>
<link rel="icon" type="image/png" href="icone1.png">
<link rel="stylesheet" type="text/css" media="screen" href="KEMOLP.css" />
</head>
<body>
<image src="mecolp.png" alt="Image" height="20%" width="20%">
<hr>
<center>
<div class="column">
<a href="FILM.html"><h1>FILMS</h1></a>
</div>
<div class="column">
<a href="SERIE.html"><h1>SERIE</h1></a>
</div>
<div class="column">
<a href="COURT-METRAGE.html"><h1>COURT-METRAGE</h1></a>
</div>
 <div class="column">
<a href="KEMOLP.html"><h1>MASHINIMA</h1></a>
</div>
</center>
<br>
<br>
<br>
<br>
<hr>
<br>
<center>
    <IFRAME SRC="https://uqload.co/embed-nkhxb342kccf.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1000 HEIGHT=562 allowfullscreen></IFRAME>
    <h4>EPISODE 1</h4>
    </div>
    <br>
    <?php 
    
    session_start();

    if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] + 1;
    }else{
    $_SESSION['view'] = 1;
}

echo "".$_SESSION['view'];

          $sql = "INSERT INTO `streaming`(`vues`) VALUES ('$_SESSION');";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
          		
    <?php } }?>
</center>
<br>
<hr>
<br>
<div class="column">
    <a href="BEP EPISODE 2.html">
    <img src ="BILPRO/BILLIE2.jpg" height="100%" width="100%">
    <h4>EPISODE 2</h4>
    </div>
    <div class="column">
        <a href="BEP EPISODE 3.html">
        <img src ="BILPRO/BILLIE3.jpg" height="100%" width="100%">
        <h4>EPISODE 3</h4>
        </div>
        <div class="column">
            <a href="BEP EPISODE 4.html">
            <img src ="BILPRO/BILLIE4.jpg" height="100%" width="100%">
            <h4>EPISODE 4</h4>
            </div>
        <div class="column">
            <a href="BEP EPISODE 5.html">
            <img src ="BILPRO/BILLIE5.jpg" height="100%" width="100%">
            <h4>EPISODE 5</h4>
            </div>
            <div class="column">
                <a href="BEP EPISODE 6.html">
                <img src ="BILPRO/BILLIE6.jpg" height="100%" width="100%">
                <h4>EPISODE 6</h4>
                </div>
    </html>