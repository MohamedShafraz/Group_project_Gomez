<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<style>
    .test:hover {
        background: var(--Gomez-highlight);
        color: white;
    }

    .test {
        margin: 30% 0%;
        padding: 33%;
        border-radius: 6px;
        background: #fff;
        color: var(--Gomez-highlight);
        border: none;
    }

    .test#c {
        margin: 10% 0%;
        padding: 27%;
    }
</style>
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>
<br><br>
<ul style="position:fixed;background-color: #5998ff;left: 28%;display: flex;top: 22%;padding: 1.2% 21% 1.2% 7.7%;width: 30.5%;font-family:'inter';color:var(--Gomez-Blue);color:white">
    <li style="width: 63%;">Full Name</li>
    <li style="width: 50%;">Type</li>
    <li style="width: 42%;">Mobile Number</li>

</ul>
<div class="complainttext" style="width: 58.2%;">Patient</div>

<table class="complainttable">


    <tbody class="complaint" style="height: 17rem;margin-top:2.8rem">
        <tr style='color:white;margin: 2.8%;'></tr><br>
        <?php
        for ($index = 0; $index < sizeof($data); $index++) {
            $id[$index] = $data[$index]['id'];
            $_SESSION['id'] = $data[$index]['id'];
            if (implode("", explode("'", $data[$index]['type'])) != 'Unregister') {
                echo "<tr><td style='width: 250px;margin: 0% -11%;'>" . $data[$index]['userName'] . "</td><td style='width: 66px;'>" . implode("", explode("'", $data[$index]['type'])) . "</td><td style='width: 144px;'>0" . $data[$index]['phonenumber'] . "</td><td><button onclick = 'z(" .  $id[$index] . ")' class=test >view</button></td></tr><tr style='color:white;margin: 0.2%;'></tr>";
            }
        }
        ?>


    </tbody>

</table>
<button onclick="window.location.href += '/create'" style="    padding: 1%;margin:0%;
    margin-left: 28%;margin-top:1%" class="test">Create new</button>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>