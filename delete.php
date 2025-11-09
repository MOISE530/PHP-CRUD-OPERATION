
<?php
if(isset($_GET['submit'])){
    include("connect.php");
    $patient_id=$_GET['patient_id'];
    $delete="DELETE FROM patients WHERE patient_id='$patient_id'";
    if(mysqli_query($conn,$delete)){
     echo"Record deleted well";
    }
    else
    {
        echo"not yet deleted".mysql_error();
    }
    mysqli_close($conn);
}
?>
<html>
    <head></head>
    <title></title>
    <body>
        <div>
            <form action="" method="GET">
                PATIENT_ID:<input type="text" name="patient_id"><br>
                <input type="submit" name="submit" value="delete">
            </form>
        </div>
    </body>
</html>