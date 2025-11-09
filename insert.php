<?php
if(isset($_POST['submit'])){
include("connect.php");
$patient_id=$_POST['patient_id'];
$patient_name=$_POST['patient_name'];
$patient_age=$_POST['patient_age'];
$patient_gender=$_POST['patient_gender'];
$insert="INSERT INTO patients (patient_id,patient_name,patient_age,patient_gender)VALUES('$patient_id','$patient_name','$patient_age','$patient_gender')";
if(mysqli_query($conn,$insert)){
    echo"Record well inserted";
}
else
{
    echo"Not yet inserted";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        background-color: pink;
        color: black;
    }
    .cont{
        padding: 30px;
        width: 200px;
        height: 340px;
        background-color: rgb(8, 216, 189);
        border: 10px green solid;
        box-shadow: 10px 10px 5px black;
    }
    .cont input{
        background-color: rgb(8, 216, 189);
        border-bottom-color: yellow;
        border-top-style: none;
        border-right-style: none;
        border-left-style: none;
   
    }
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center> <div class="cont">
    <form action="" method="POST">
<label for="patient_id">patient_id:</label>
<input type="text" name="patient_id" placeholder="ENTER PATIENT ID"><br><br>

<label for="patient_name">PATIENT NAME:</label>
<input type="text" name="patient_name" placeholder="ENTER PATIENT NAME"><br><br>

<label for="patient_age">PATIENT AGE:</label>
<input type="text" name="patient_age" placeholder="ENTER PATIENT AGE"><br><br>

<label for="patient_gender">PATIENT GENDER:</label>
<input type="text" name="patient_gender" placeholder="ENTER PATIENT GENDER"><br><br>
<input type="submit" name="submit" value="SEND">
    </form>
</div>
    </center>
</body>
</html>