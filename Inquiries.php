<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="TRNTL LOGO 1.png ">
    <title>TRNTL | Enquiry submitted</title>
    <link rel=stylesheet href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mozilla+Text:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nbar">
        <a class="nba" href="Packages.html">Packages</a>
        <a href="Home.html"><img class="homeico" src="TRNTLLOGO1SHORT.png" alt="Logo"></a>
        <a class="nba" href="Inquiries.html">Inquiries</a>
    </div>
        <p>Your Enquiry was submitted. Thank you for choosing our services</p>
</body>

</html>


<?php
    file_put_contents($_POST['aon'] . $_POST['ptype'] . '.txt', $_POST['email']."\n".$_POST['walletaddr']."\n", FILE_APPEND);
?>
