<?php
include "connect.php";

if (isset($_GET['patient_id'])) {
    $patient_id = $_GET['patient_id'];

    $sql = "SELECT * FROM patients WHERE patient_id = '$patient_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    } else {
        echo "Record not found!";
        exit;
    }
}

if (isset($_POST['update'])) {
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $patient_age = $_POST['patient_age'];
    $patient_gender = $_POST['patient_gender'];

    $update = "UPDATE patients
               SET patient_name='$patient_name',patient_age='$patient_age',patient_gender='$patient_gender' WHERE patient_id='$patient_id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Record updated successfully!');
                window.location.href='display.php';
              </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<html>
<head>
    <title>Update Record</title>
    <style>
        body {
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        form {
            background-color: #ffffff;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #333333;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #cccccc;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2>Update Patient Information</h2>

    <form method="POST" action="">
        <label>Patient ID:</label>
        <input type="text" name="patient_id" value="<?php echo isset($row['patient_id']) ? $row['patient_id'] : ''; ?>" required>

        <label>Patient Name:</label>
        <input type="text" name="patient_name" value="<?php echo isset($row['patient_name']) ? $row['patient_name'] : ''; ?>" required>

        <label>Patient Age:</label>
        <input type="text" name="patient_age" value="<?php echo isset($row['patient_age']) ? $row['patient_age'] : ''; ?>" required>

        <label>Patient Gender:</label>
        <input type="text" name="patient_gender" value="<?php echo isset($row['patient_gender']) ? $row['patient_gender'] : ''; ?>" required>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>


















