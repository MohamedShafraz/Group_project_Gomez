<?php

?>

<link rel="stylesheet" href="<?= URLROOT ?>/css/LabAssisstant/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">

<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/LabAssistant/navbar_view.php"); ?>
<?php require_once(APPROOT . "/views/LabAssistant/sidenav_view.php"); ?>
<!-- <a>Welcome to Gomez</a> -->
<style>
    .heading {
        position: fixed;
        padding: 0% 8.0% 0% 9%;
        margin-top: 0.7%;
        width: 90%;
        margin-left: 27.6%;
        padding: 8px 10px;
        border-radius: 9px;
        color: var(--Gomez-Blue);
        font-family: inter;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(13rem, 0fr));
        gap: 1.5rem;
        display: flex;
        flex-direction: row;
        align-content: center;
        gap: 85px;
        font-size: large;
        /* width: 795px; */
        background-color: beige;
        width: 679px;
        padding: 0% 7.9% 0% 9.1%;
        line-height: 7vh;
        border-radius: 8px;
    }

    .complainttext {
        text-align: center;
        /* Centers the text horizontally */
        margin-left: 450px;
        /* Remove margin */
        padding: 10px;
        /* Add padding if needed */
        font-size: 1.5em;
        /* Adjust font size for better visibility */
        color: #000;
        /* Adjust color if needed */
        font-weight: bold;
        /* Make it bold */

    }

    .action-buttons button {
        margin-right: 1px;
        /* Adjust the margin between buttons */
        padding: 5px 10px;
        /* Adjust button padding */
        background-color: var(--Gomez-Blue);
        /* Green background */
        color: white;
        /* White text */
        border: none;
        /* No border */
        border-radius: 4px;
        /* Rounded corners */
        cursor: pointer;
        /* Cursor on hover */
    }

    .action-buttons {
        padding: 17%;
    }

    .complaint tr {
        color: black;
        margin: 5%;
        font-size: 15px;
        padding: 1.2% 55.8% 1.2% 57.8%;
        width: 1027px;
        gap: 0px;
    }
</style>

<article>
    <div style="text-align: center; margin-bottom: 20px; margin-left:100px;background-color:white;padding:3%;">
        <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="refnoSearch">Ref_No:</label>
            <input type="text" id="refnoSearch" onkeyup="filterTable()" placeholder="Search by Ref_No">

            <label for="patientNameSearch">Name:</label>
            <input type="text" id="patientNameSearch" onkeyup="filterTable()" placeholder="Search by Name">
        </form>
    </div>
    <div class="complainttext" style="width: 67.3%;color:white;">Reports</div>
    <ul style="    position: fixed;
    width:52.2%;
    background-color: #5998ff;
    left: 24%;
    display: flex
;
    top: 36%;
    padding: 1.2% 7.8% 1.2% 7.8%;
    font-family: 'inter';
    color: var(--Gomez-Blue);
    color: white;
    margin: 0% 3%;">
        <li style="width:151px">Ref_no</li>
        <li style="width:151px">Name</li>
        <li style="width:151px">Test</li>
        <li style="width:151px">Status</li>
        <li style="width:151px">File</li>
        <li style="width:151px">Actions</li>




    </ul>
    <table class="complainttable" style="height: 50vh;margin-top:5%;margin-left: 25.5%;">
        <tbody class="complaint">
            <?php foreach ($data as $row) : ?>
                <?php
                // Filter logic based on search inputs
                $refno = isset($_GET['search_refno']) ? $_GET['search_refno'] : '';
                $patientName = isset($_GET['search_patientName']) ? $_GET['search_patientName'] : '';

                // Perform filtering
                if ((!$refno || $row['refno'] == $refno) && (!$patientName || $row['patientName'] == $patientName)) :
                ?>
                    <tr style='color:black;margin: 5%;font-size: 16px'>
                        <td style='width: 151px;'><?= $row['refno'] ?></td>
                        <td style='width: 151px;'><?= $row['patientName'] ?? "unknown" ?></td>
                        <td style='width: 151px;'><?= $row['testname'] ?></td>
                        <?php $status =  $row['status'] == "" ? "pending" : $row['status'] ?>
                        <td style='width: 151px'><?= $status ?></td>
                        <td style='width: 151px;'><?= $row['filename'] ?></td>
                        <td style='width:4%;'>
                            <div class="action-buttons">
                                <div style="display:flex;width:3%;">
                                    <button onclick="window.location.href='<?= URLROOT . '/LabAssistant/ReportView/' . $row['filename'] ?>'">View</button>
                                    <button onclick="openPopup('<?= $row['refno'] ?>')">Upload</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>




</article>
<div id="uploadPopup" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <form id="uploadForm" action="<?= URLROOT ?>/LabAssistant/uploadReport" method="post" enctype="multipart/form-data">
        <label for="fileInput">Choose PDF file:</label>
        <input type="file" id="fileInput" name="file" accept=".pdf" style="margin-bottom: 10px;">
        <input type="hidden" name="refno" id="refnoInput">
        <button type="submit">Upload</button>
        <button type="button" onclick="closePopup()">Cancel</button>
    </form>
</div>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    function openPopup(refno) {
        document.getElementById('uploadPopup').style.display = 'block';
        document.getElementById('refnoInput').value = refno;
    }

    function closePopup() {
        document.getElementById('uploadPopup').style.display = 'none';
    }

    function filterTable() {
        var refnoInput, patientNameInput, filterRefno, filterPatientName, table, tr, tdRefno, tdPatientName, i;
        refnoInput = document.getElementById('refnoSearch');
        patientNameInput = document.getElementById('patientNameSearch');
        filterRefno = refnoInput.value.toUpperCase();
        filterPatientName = patientNameInput.value.toUpperCase();
        table = document.querySelector('.complainttable');
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tdRefno = tr[i].getElementsByTagName("td")[0];
            tdPatientName = tr[i].getElementsByTagName("td")[1];
            if (tdRefno && tdPatientName) {
                var txtValueRefno = tdRefno.textContent || tdRefno.innerText;
                var txtValuePatientName = tdPatientName.textContent || tdPatientName.innerText;
                if (txtValueRefno.toUpperCase().indexOf(filterRefno) > -1 && txtValuePatientName.toUpperCase().indexOf(filterPatientName) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>