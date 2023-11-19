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
    <IFRAME SRC="https://uqload.io/embed-jlm65xth6vyq.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1000 HEIGHT=562 allowfullscreen></IFRAME>
    <h4>EPISODE 2</h4>
    </div>
    <br>

    <?php
    $sql = "UPDATE `streaming` SET vues = vues+1 WHERE id = 10";
    $conn->query($sql);

    $sql = "SELECT vues FROM `streaming` WHERE id = 10";
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
    <a href="BILLIEETPROKEPISODE1.php">
    <img src ="BILPRO/BILLIE1.jpg" height="100%" width="100%">
    <h4>EPISODE 1</h4>
    </div>
    <div class="column">
        <a href="BILLIEETPROKEPISODE3.php">
        <img src ="BILPRO/BILLIE3.jpg" height="100%" width="100%">
        <h4>EPISODE 3</h4>
        </div>
        <div class="column">
            <a href="BILLIEETPROKEPISODE4.php">
            <img src ="BILPRO/BILLIE4.jpg" height="100%" width="100%">
            <h4>EPISODE 4</h4>
            </div>
        <div class="column">
            <a href="BILLIEETPROKEPISODE5.php">
            <img src ="BILPRO/BILLIE5.jpg" height="100%" width="100%">
            <h4>EPISODE 5</h4>
            </div>
            <div class="column">
                <a href="BILLIEETPROKEPISODE6.php">
                <img src ="BILPRO/BILLIE6.jpg" height="100%" width="100%">
                <h4>EPISODE 6</h4>
                </div>
    </html>