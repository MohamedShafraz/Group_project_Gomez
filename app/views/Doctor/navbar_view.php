<?php
// include_once(APPROOT."/views/header_view.php");
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
<img src="<?=URLROOT."/resources/gomezlogo2.png"?>" alt="" class="image">
<br>
<br>
<br>

<header class="header">
        <nav class="navbar">
            <img src="<?= 'data:image/png;base64,' . base64_encode($_SESSION["USER"]["profilepicture"]) ?>" class="profilepic" >
            <a href="<?=URLROOT."/logout"?>"><div class="selected">
                <font class="GMfont" style="font-family: 'inter';" onclick="windows.location.href = 'location:logout'"> Hello, <?=$_SESSION['uname']?></font></div>
            </a>
        </nav>
        <?php include APPROOT . '/views/Doctor/sidebar.php' ?>
    </header>