<?php
include_once(APPROOT . '/views/header_view.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home - Copy_files/GMZ.css">

    <style>
        h2 {
            margin-top: 5%;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;

        }

        form {
            max-width: 60%;
            /* Set a maximum width for the form */

        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            flex: 1;
            /* Allow labels to grow to take available space */
            margin-right: 20px;
            white-space: nowrap;
            /* Prevent line breaks within the label */
        }

        .input {
            flex: 1;
            /* Allow inputs to grow to take available space */
            padding: 5px;
            box-sizing: border-box;
        }

        .button {
            /* background-color: var(--gomez-blue);
            padding: 5px;
            box-sizing: border-box; */
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-shrink: 0;
            color: var(--Gomez-White);
            font-family: 'inter-bold';
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            flex-shrink: 0;
            border-radius: 10px;
            background: var(--Gomez-highlight);
            position: relative;
            padding: 1.4%;
            filter: drop-shadow(3px 3px 7px --Gomez-Black);
            width: max-content;
            border-style: none;
            box-shadow: 2px 2px 1px var(--Gomez-Black);
            font-family: inter;
        }

        .images {
            display: flex;
            gap: 100px;
            padding-bottom: 100px;
            padding-top: 50px;
            justify-content: center;
            font-family: inter;
            padding-bottom: 34px;
            padding-top: 79px;
        }

        .images img {
            width: 100px;
        }
    </style>

    <title>Lab Report</title>
</head>



<h2 style="margin: 10% 0% 0% 17%;">Lab Reports</h2>
<form action="" method="post" style="margin-top: 5%;margin-left:17%;">
    <div class="form-group">
        <label for="refno">Lab Report Reference Number:</label>
        <input type="text" id="refno" name="refno" required class="input" value="<?= $data['refno'] ?? "" ?>">
    </div>

    <div class="form-group">
        <label for="passcode">Passcode(printed on bill):</label>
        <input type="password" id="passcode" name="passcode" required class="input" value="<?= $data['passcode'] ?? "" ?>">
    </div>

    <?php
    if (isset($data['filename'])) {
        echo "<div class='form-group'><a href=" . URLROOT . "/LabAssistant/ReportView/" . $data['filename'] . " style='text-decoration:none' class='button'>View</a></div>";
    } else {
        echo " <div class='form-group'>
        <button type='submit' class='button'>Submit</button>
    </div>";
    }
    ?>
</form>

</body>

</html>