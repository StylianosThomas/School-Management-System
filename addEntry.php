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

    if ($tableName == "faculty"){
        $addName = $_POST["newName"];
        $addSurname = $_POST["newSurname"];
        $addEmail= $_POST["newEmail"];
        $sql = "INSERT INTO faculty(`Faculty_Name`, `Faculty_Surname`, `Faculty_Email`) VALUES ('$addName','$addSurname','$addEmail')";
        if ( $conn->query($sql) === TRUE) {
            echo "New faculty member added successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was created <br>";
        }
        echo "<br>";
    } elseif ($tableName == "students"){
        $addName = $_POST["newName"];
        $addSurname = $_POST["newSurname"];
        $addEmail= $_POST["newEmail"];
        $sql = "INSERT INTO students(`Student_Name`, `Student_Surname`, `Student_Email`) VALUES ('$addName','$addSurname','$addEmail')";
        if ( $conn->query($sql) === TRUE) {
            echo "New student added successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was created <br>";
        }
        echo "<br>";
    } elseif ($tableName == "courses"){
        $addCourse = $_POST["newCourse"];
        $addDescription = $_POST["newDescription"];
        $addPrice= $_POST["newPrice"];
        $sql = "INSERT INTO courses(`Course_Name`, `Description`, `Price`) VALUES ('$addCourse','$addDescription','$addPrice')";
        if ( $conn->query($sql) === TRUE) {
            echo "New course added successfully <br>";
        } else {
            echo "There was a problem while processing the request. No record was created <br>";
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