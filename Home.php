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

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Faculty" role="tab" aria-controls="Faculty" aria-selected="true">Faculty</a>
         </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Students" role="tab" aria-controls="Students" aria-selected="false">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Courses" role="tab" aria-controls="Courses" aria-selected="false">Courses</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Faculty" role="tabpanel" aria-labelledby="home-tab">
            <form action="addEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Add a new faculty member into the system </th> </tr>
                    <tr> <input type="hidden" value="faculty" name = "tableName">
                        <td> <input type="text" placeholder=" First Name " name="newName" > </td>
                        <td> <input type="text" placeholder=" Last Name " name="newSurname" > </td>
                        <td> <input type="email" placeholder=" Email " name="newEmail" > </td>
                        <td> <input type="submit" value="Add" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="searchEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="3"> Search for an existing faculty member </th> </tr>
                    <tr> <td colspan="3"> Please type in both the first and last name: </td> </tr>
                    <tr> <input type="hidden" value="faculty" name = "tableName">
                        <td> <input type="text" placeholder=" First Name " name="searchName" > </td>
                        <td> <input type="text" placeholder=" Last Name " name="searchSurname" > </td>
                        <td> <input type="submit" value="Search" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="updateEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Update the information of an existing faculty member </th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the faculty member:</td> </tr>
                    <tr> <input type="hidden" value="faculty" name = "tableName">
                    <tr> <td> <input type="number" min="1" placeholder=" Faculty ID " name="updateID" > </td></tr>
                    <tr> <td colspan="4"> You can find out the ID of a faculty member by using the search option above </td> </tr>
                    <tr><td><p></td></tr>
                    <tr> <td colspan="4"> Please type in all information to be updated: </td> </tr>
                        <td> <input type="text" placeholder=" New First Name " name="updateName" > </td>
                        <td> <input type="text" placeholder=" New Last Name " name="updateSurname" > </td>
                        <td> <input type="email" placeholder=" New Email " name="updateEmail" > </td>
                        <td> <input type="submit" value="Update" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="deleteEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Remove an existing faculty member from the system</th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the faculty member:</td> </tr>
                    <tr> <input type="hidden" value="faculty" name = "tableName"> </tr>
                    <tr>
                        <td> <input type="number" min="1" placeholder=" Faculty ID " name="deleteID" > </td>
                        <td> <input type="submit" value="Remove" > </td>
                    </tr>
                    <tr> <td colspan="4"> You can find out the ID of a faculty member by using the search option above </td> </tr>
                </table>
            </form> <br>
        </div>
        <div class="tab-pane fade" id="Students" role="tabpanel" aria-labelledby="profile-tab">
            <form action="addEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Add a new student into the system </th> </tr>
                    <tr> <input type="hidden" value="students" name = "tableName">
                        <td> <input type="text" placeholder=" First Name " name="newName" > </td>
                        <td> <input type="text" placeholder=" Last Name " name="newSurname" > </td>
                        <td> <input type="email" placeholder=" Email " name="newEmail" > </td>
                        <td> <input type="submit" value="Add" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="searchEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="3"> Search for an existing student </th> </tr>
                    <tr> <td colspan="3"> Please type in both the first and last name: </td> </tr>
                    <tr> <input type="hidden" value="students" name = "tableName">
                        <td> <input type="text" placeholder=" First Name " name="searchName" > </td>
                        <td> <input type="text" placeholder=" Last Name " name="searchSurname" > </td>
                        <td> <input type="submit" value="Search" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="updateEntry.php" method="post"> <p>
                <table>
                <tr> <th colspan="4"> Update the information of an existing student </th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the student:</td> </tr>
                    <tr> <input type="hidden" value="students" name = "tableName">
                    <tr> <td> <input type="number" min="1" placeholder=" Student ID " name="updateID" > </td></tr>
                    <tr> <td colspan="4"> You can find out the ID of a student by using the search option above</td> </tr>
                    <tr><td><p></td></tr>
                    <tr> <td colspan="4"> Please type in all information to be updated: </td> </tr>
                        <td> <input type="text" placeholder=" New First Name " name="updateName" > </td>
                        <td> <input type="text" placeholder=" New Last Name " name="updateSurname" > </td>
                        <td> <input type="emai" placeholder=" New Email " name="updateEmail" > </td>
                        <td> <input type="submit" value="Update" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="deleteEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Remove an existing student from the system</th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the student:</td> </tr>
                    <tr> <input type="hidden" value="students" name = "tableName"> </tr>
                    <tr>
                        <td> <input type="number" min="1" placeholder=" Student ID " name="deleteID" > </td>
                        <td> <input type="submit" value="Remove" > </td>
                    </tr>
                    <tr> <td colspan="4"> You can find out the ID of a student by using the search option above </td> </tr>
                </table>
            </form> <br>
        </div>
        <div class="tab-pane fade" id="Courses" role="tabpanel" aria-labelledby="contact-tab">
            <form action="addEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Add a new course into the system </th> </tr>
                    <tr> <input type="hidden" value="courses" name = "tableName">
                        <td> <input type="text" placeholder=" Course Name " name="newCourse" > </td>
                        <td> <input type="text" placeholder=" Description " name="newDescription" ></td>
                        <td> <input type="number" placeholder=" Price " min="0" name="newPrice" ></td>
                        <td> <input type="submit" value="Add" ></td>
                    </tr>
                </table>
            </form> <br>
            <form action="searchEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="3"> Search for an existing course </th> </tr>
                    <tr> <input type="hidden" value="courses" name = "tableName">
                        <td> <input type="text" placeholder=" Course Name " name="searchCourse" > </td>
                        <td> <input type="submit" value="Search" > </td>
                    </tr>
                </table>
            </form> <br>
            <form action="updateEntry.php" method="post"> <p>
                <table>
                <tr> <th colspan="4"> Update the information of an existing course </th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the course:</td> </tr>
                    <tr> <input type="hidden" value="courses" name = "tableName">
                    <tr> <td> <input type="number" min="1" placeholder=" Course ID " name="updateID" > </td></tr>
                    <tr> <td colspan="4"> You can find out the ID of a course by using the search option above </td> </tr>
                    <tr><td><p></td></tr>
                    <tr> <td colspan="4"> Please type in all information to be updated: </td> </tr>
                        <td> <input type="text" placeholder=" New Course Name " name="updateCourse" > </td>
                        <td> <input type="text" placeholder=" New Description " name="updateDescription" > </td>
                        <td> <input type="number" min="0" placeholder=" New Price " name="updatePrice" > </td>
                        <td> <input type="submit" value="Update" > </td>
                </table>
            </form> <br>
            <form action="deleteEntry.php" method="post"> <p>
                <table>
                    <tr> <th colspan="4"> Remove an existing course from the system</th> </tr>
                    <tr> <td colspan="4"> Please type in the ID of the course:</td> </tr>
                    <tr> <input type="hidden" value="courses" name = "tableName"> </tr>
                    <tr>
                        <td> <input type="number" min="1" placeholder=" Course ID " name="deleteID" > </td>
                        <td> <input type="submit" value="Remove" > </td>
                    </tr>
                    <tr> <td colspan="4"> You can find out the ID of a course by using the search option above </td> </tr>
                </table>
            </form> <br>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>