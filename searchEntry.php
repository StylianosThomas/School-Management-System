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
        $searchName = $_POST["searchName"];
        $searchSurname = $_POST["searchSurname"];
        $sql = "SELECT * FROM faculty WHERE Faculty_Name='$searchName' AND Faculty_Surname='$searchSurname'";
        $result = mysqli_query($conn,$sql);
        if (!$row= mysqli_fetch_assoc($result)){
            echo "Faculty member wasn't found. Please check if you typed in the first and last name correctly and try again. <br>";
        } else {
            echo "<table border='1'>";
            echo "<tr><th colspan='4' style='padding:5px'> Record found: </th> </tr>";
            echo "<tr><th style='padding:5px'> Faculty ID </th> <th style='padding:5px'> First Name </th> <th style='padding:5px'> Last Name </th> <th style='padding:5px'> Email </th></tr>";
            echo "<tr>";
           foreach($row as $value){
            echo "<td style='padding:5px'>" .$value. "</td>";
           }
           echo "</tr></table> <br>";
        }
    } elseif ($tableName == "students"){
        $searchName = $_POST["searchName"];
        $searchSurname = $_POST["searchSurname"];
        $sql = "SELECT * FROM students WHERE Student_Name='$searchName' AND Student_Surname='$searchSurname'";
        $result = mysqli_query($conn,$sql);
        if (!$row= mysqli_fetch_assoc($result)){
            echo "Student wasn't found. Please check if you typed in the first and last name correctly and try again. <br>";
        } else {
            echo "<table border='1'>";
            echo "<tr><th colspan='4' style='padding:5px'> Record found: </th> </tr>";
            echo "<tr><th style='padding:5px'> Student ID </th> <th style='padding:5px'> First Name </th> <th style='padding:5px'> Last Name </th> <th style='padding:5px'> Email </th></tr>";
            echo "<tr>";
           foreach($row as $value){
               echo "<td style='padding:5px'>" .$value. "</td>";
           }
           echo "</tr></table> <br>";
        }
    } elseif ($tableName == "courses"){
        $searchCourse = $_POST["searchCourse"];
        $sql = "SELECT * FROM courses WHERE Course_Name='$searchCourse'";
        $result = mysqli_query($conn,$sql);
        if (!$row= mysqli_fetch_assoc($result)){
            echo "Course wasn't found. Please check if your typed the name correctly and try again. <br>";
        } else {
            echo "<table border='1'>";
            echo "<tr><th colspan='4' style='padding:5px'> Record found: </th> </tr>";
            echo "<tr><th style='padding:5px'> Course ID </th> <th style='padding:5px'> Course Name </th> <th style='padding:5px'> Description </th> <th style='padding:5px'> Price </th></tr>";
            echo "<tr>";
           foreach($row as $value){
            echo "<td style='padding:5px'>" .$value. "</td>";
           }
           echo "</tr></table> <br>";
        }
    } else {
        echo "Error - Something went horribly wrong";
    }
    echo "<br>";
    ?>
    <input type="button" onclick="location.href='Home.php';" value="Return to home page" />
</body>
</html>