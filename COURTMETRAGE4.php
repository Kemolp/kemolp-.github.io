<?php include "connexion.php"; ?>
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
</center>
<br>
<br>
<br>
<br>
<hr>
<br>
<center>
<IFRAME SRC="https://uqload.io/embed-jjxs0wkrlumj.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1000 HEIGHT=562 allowfullscreen></IFRAME>
    <h4>INFINITY SOCK</h4>
    <br>

    <?php
    $sql = "UPDATE `streaming` SET vues = vues+1 WHERE id = 18";
    $conn->query($sql);

    $sql = "SELECT vues FROM `streaming` WHERE id = 18";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["vues"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>
</center>
<br>
<hr>
<br>
<div class="column">
    <a href="COURTMETRAGE1.php">
    <img src ="COURT METRAGE/le voyageur.png" height="100%" width="100%">
    <h4>LE VOYAGEUR</h4>
    </div>
    <div class="column">
        <a href="COURTMETRAGE2.php">
        <img src ="COURT METRAGE/WANDERNDER RITTER.png" height="100%" width="100%">
        <h4>WANDERNDER RITTER</h4>
        </div>
        <div class="column">
    <a href="COURTMETRAGE3.php">
    <img src ="COURT METRAGE/FUNFAIR'S TOM.png" height="100%" width="100%">
    <h4>FUNFAIR'S TOM</h4>
    </div>
</html>