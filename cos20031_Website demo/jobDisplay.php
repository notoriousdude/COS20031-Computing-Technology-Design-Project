<?php
include_once("processJob.php");

$sql2 = "SELECT * FROM job_description  
LEFT JOIN job_requirements ON job_description.job_id = job_requirements.job_id
LEFT JOIN job_benefits  ON job_description.job_id = job_benefits.job_id;";

$result2 = mysqli_query($connect, $sql2);
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
    <title>Courses</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"></img></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5">Home</a></li>
                <li><a href="course.php" class="nhan5 active">Courses</a></li>
                <li><a href="job.php" class="nhan5">Jobs</a></li>
                <li><a href="profile.php" class="nhan5">Your Profile</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>
    
    <!---Store data of courses that applicants buy-->
    <?php while ($row_job = mysqli_fetch_assoc($result2)) : ?>
        <div class="profile-container">
        <div class="profile-image">
            <img src="images/job6.jpg" alt="Job Image">
        </div>
        <div class="profile-details">
            <?php
            echo "<h2>Job ".$row_job["job_id"]."</h2>";
            ?>
            <?php
            echo "<p><strong>Job Title:</strong> ".$row_job["job_title"]."</p>";
            echo "<p><strong>Employer:</strong> ".$row_job["recruiter"]."</p>";
            echo "<p><strong>Application Deadline:</strong> ".$row_job["application_deadline"]."</p>";
            echo "<p><strong>Salary:</strong> $".$row_job["salary"]." per year.</p>";
            echo "<p><strong>Working location:</strong> ".$row_job["working_location"]."</p>";
            echo "<p><strong>Category of this job:</strong> ".$row_job["category"]."</p>";
            echo "<p><strong>Quantity of applicants:</strong> ".$row_job["applicant_count"]." participants </p>";
            ?>
        </div>

        <div class="section-heading"></div>

        <div class="profile-details">
            <h2>Job Requirement</h2>
            <?php
            echo "<p><strong>Before applying, you must:</strong></p>";
            echo "<p>".$row_job["requirement"]."</p>";
            ?>
        </div>

        <div class="section-heading"></div>

        <div class="profile-details">
            <h2>Job Benefits</h2>
            <?php
            echo "<p><strong>Becoming a member of our company, you have:</strong></p>";
            echo "<p>".$row_job["benefit"]."</p>";
            ?>
        </div>
        </div> 
    <?php endwhile; ?>

    <div class="buttons-container">
            <a href="profile.php" class="medium-button">BACK TO PROFILE PAGE</a>
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
