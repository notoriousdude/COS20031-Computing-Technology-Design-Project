<?php
include("connect.php");
include("processCourse.php");

$sql = "SELECT * FROM user_information , working_experiences,
                    educational_backgrounds;";

$sql2 = "SELECT * FROM courses  
        LEFT JOIN course_outlines ON courses.course_id = course_outlines.course_id
        LEFT JOIN course_outcomes ON courses.course_id = course_outcomes.course_id;";

$result = mysqli_query($connect, $sql);
$result2 = mysqli_query($connect, $sql2);

//Display data about user information
if ($result){
    while ($row = mysqli_fetch_assoc($result)){
        //user information table
        $id = $row["user_id"];
        $fullname = $row["full_name"];
        $dateofbirth = $row["date_of_birth"];
        $gender = $row["gender"];
        $phonenumber = $row["phone_number"];
        $email = $row["email"];
        $address = $row["address"];

        //educational background table
        $degree = $row["degree"];
        $institution = $row["institution"];
        
        //working experience table
        $jobtitle = $row["job_title"];
        $employer = $row["employer"];

    }
}

//Display data about courses registration
//---->Using while loop in courseDisplay page

//Display data about job application
//----->Using while loop in jobDisplay page
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Profile</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"/></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5">Home</a></li>
                <li><a href="course.php" class="nhan5">Courses</a></li>
                <li><a href="job.php" class="nhan5">Jobs</a></li>
                <li><a href="profile.php" class="nhan5 active">Your Profile</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>

    <!---Create a profile page to store data of an applicant-->
    <div class="profile-container">
        <div class="profile-image">
            <img src="images/profile.jpg" alt="Profile Image">
        </div>
        <div class="profile-details">
            <h2>User Information</h2>
            <?php
            echo "<p><strong>Full Name:</strong> ".$fullname."</p>";
            echo "<p><strong>Date of birth:</strong> ".$dateofbirth."</p>";
            echo "<p><strong>Gender:</strong> ".$gender."</p>";
            echo "<p><strong>Phone Number:</strong> ".$phonenumber."</p>";
            echo "<p><strong>Email:</strong> ".$email."</p>";
            echo "<p><strong>Address:</strong> ".$address."</p>";
            ?>
        </div>

        <div class="section-heading"></div>

        <div class="profile-details">
            <h2>Education Background</h2>
            <?php
            echo "<p><strong>Degree:</strong> ".$degree."</p>";
            echo "<p><strong>Institution:</strong> ".$institution."</p>";
            ?>
        </div>

        <div class="section-heading"></div>

        <div class="profile-details">
            <h2>Working Experience</h2>
            <?php
            echo "<p><strong>Job title:</strong> ".$jobtitle."</p>";
            echo "<p><strong>Employer:</strong> ".$employer."</p>";
            ?>
        </div>
    </div> 

    <div class="profile-container">
        <div class="profile-image">
            <img src="images/home_course2.jpg" alt="Course Image">
        </div>
        <div class="profile-details">
            <h2>Course Registration Information</h2>
            <div class="button-container">
                <a href="courseDisplay.php" class="medium-button">View Your Courses</a>
            </div>
        </div>
    </div> 

    <div class="profile-container">
        <div class="profile-image">
            <img src="images/job5.jpg" alt="Job Image">
        </div>
        <div class="profile-details">
            <h2>Job Applied Information</h2>
            <div class="button-container">
                <a href="jobDisplay.php" class="medium-button">View Your Jobs</a>
            </div>
        </div>
    </div> 


    <footer>
        <div class="nhan7">
            <h3>TANK Team</h3>
            <ul class="nhan8">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="nhan9">
            <p>COPYRIGHT &copy;2023 Team TANK</p>
        </div>
    </footer>
</body>
</html>