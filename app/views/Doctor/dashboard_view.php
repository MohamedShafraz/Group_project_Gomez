<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<aside class="sidenav">
    <ul>
        <img src="<?= URLROOT . "/resources/user.png" ?>"><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard</li>
        <li id="Doctor/ViewAppointment" onclick="y('Doctor/ViewAppointment')">Appointment</li>
        <li id="Doctor/ViewPrescription" onclick="y('Doctor/ViewPrescription')"> Prescription </li>
        <li id="Doctor/ViewReminder" onclick="y('Doctor/ViewReminder')">Reminder</li>
    </ul>

    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            color: inherit;
        }
    </style>



</aside>
<article class="dashboard">
    <div style="margin-left:24%;">
        <h1 style="text-align: center;">THIS IS DOCTOR DASHBOARD</h1>


    </div>
    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>