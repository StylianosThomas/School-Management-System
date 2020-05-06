<!doctype html>
<?php
include("config.php");
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>School Management System</title>
</head>
<body>
    <h1> <p> School Management System </p></h1>
    <?php
    $tableName = $_POST["tableName"];
    $updateID = $_POST["updateID"];

    if ($tableName == "faculty"){
        $updateName = $_POST["updateName"];
        $updateSurname = $_POST["updateSurname"];
        $updateEmail= $_POST["updateEmail"];

        $sql = "UPDATE faculty SET Faculty_Name = '$updateName', Faculty_Surname = '$updateSurname', Faculty_Email = '$updateEmail' WHERE Faculty_ID='$updateID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Faculty member information updated successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was updated <br>";
        }
        echo "<br>";
    } elseif ($tableName == "students"){
        $updateName = $_POST["updateName"];
        $updateSurname = $_POST["updateSurname"];
        $updateEmail= $_POST["updateEmail"];

        $sql = "UPDATE students SET Student_Name = '$updateName', Student_Surname = '$updateSurname', Student_Email = '$updateEmail' WHERE Student_ID='$updateID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Student information updated successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was updated <br>";
        }
        echo "<br>";
    } elseif ($tableName == "courses"){
        $updateCourse = $_POST["updateCourse"];
        $updateDescription = $_POST["updateDescription"];
        $updatePrice= $_POST["updatePrice"];

        $sql = "UPDATE courses SET Course_Name = '$updateCourse', Description = '$updateDescription', Price = '$updatePrice' WHERE Course_ID='$updateID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Course was updated successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was updated <br>";
        }
        echo "<br>";
    } else {
        echo "Error - Something went horribly wrong";
    }
    echo "<br>";
    ?>
    <input type="button" onclick="location.href='Home.php';" value="Return to home page" />
</body>
</html>