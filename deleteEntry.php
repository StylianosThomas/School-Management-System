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
    $deleteID = $_POST["deleteID"];

    if ($tableName == "faculty"){
        $sql = "DELETE FROM faculty WHERE Faculty_ID='$deleteID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Faculty member was removed successfully from the system <br>";
        } else {
            echo "There was a problem while processing the request. No record was removed <br>";
        }
        echo "<br>";
    } elseif ($tableName == "students"){
        $sql = "DELETE FROM students WHERE Student_ID='$deleteID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Student was removed successfully from the system <br>";
        } else {
            echo "There was a problem while processing the request. No record was removed <br>";
        }
        echo "<br>";

    } elseif ($tableName == "courses"){
        $sql = "DELETE FROM courses WHERE Course_ID='$deleteID'";

        if ( $conn->query($sql) === TRUE) {
            echo "Course was removed successfully from the system <br>";
        } else {
            echo "There was a problem while processing the request. No record was removed <br>";
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