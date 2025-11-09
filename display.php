<?php 
include "connect.php";

$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Registered Patients</title>
</head>
<body bgcolor="gray"> <center>
    <h2>REGISTERED PATIENTS</h2>
    <table border="8" cellpadding="10" bgcolor="mangenta">
        <tr>
            <th>PATIENT ID</th>
            <th>PATIENT NAME</th>
            <th>PATIENT AGE</th>
            <th>PATIENT GENDER</th>
            <th>UPDATE</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>{$row['patient_id']}</td>
                    <td>{$row['patient_name']}</td>
                    <td>{$row['patient_age']}</td>
                    <td>{$row['patient_gender']}</td>

                    <td>
                        <a href='update.php?patient_id={$row['patient_id']}' 
                           onclick=\"return confirm('Are you sure you want to update this record?');\">
                           <button>Update</button>
                        </a>
                    </td>
                </tr>";
            }
        } 
        ?>
    </table>
</body>
</html>