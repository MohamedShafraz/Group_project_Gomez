<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>'
            var $usertype = '<?= $_SESSION['userType'] ?>';
        </script>
        <img src="<?= URLROOT . "/resources/user.png" ?>" alt=""><br>
        <?= $_SESSION['userType'] ?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li id="appointments" onclick="y('appointments')">
            Appointments
        </li><br>
        <li id="labreports" onclick="y('labreports')">
            Lab Reports
        </li><br>
        <li id="alltests" onclick="y('alltests')">
            Pending Tests
        </li><br>

        <li id="userdetails" onclick="y('userdetails')">
            User information
        </li>
    </ul>
</aside>
<aside class="sidenav">
    <ul>
    <script>
        var $URLROOT = '<?=URLROOT?>'
         var $usertype= '<?=$_SESSION['userType']?>';
</script>
        <img src="<?=URLROOT."/resources/user.png"?>" alt=""><br>
        <?=$_SESSION['userType']?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li  id="appointments" onclick="y('appointments')">
            Appointments
        </li><br>
        <li  id="labreports" onclick="y('labreports')">
            Lab Reports
        </li><br>
        <li  id="alltests" onclick="y('alltests')">
            Pending Tests
        </li><br>
        
        <li id="userdetails" onclick="y('userdetails')">
            User information
        </li>
    </ul>
</aside>