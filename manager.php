<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "tank";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to calculate total enrollment count for each course type
$sql = "SELECT
            SUM(CASE WHEN course_name = 'Computer Science' THEN enrolment_count ELSE 0 END) AS type1_total,
            SUM(CASE WHEN course_name = 'Digital Marketing' THEN enrolment_count ELSE 0 END) AS type2_total,
            SUM(CASE WHEN course_name = 'Business Administration' THEN enrolment_count ELSE 0 END) AS type3_total,
            SUM(CASE WHEN course_name = 'Finance' THEN enrolment_count ELSE 0 END) AS type4_total,
            SUM(CASE WHEN course_name = 'Chemical Engineering' THEN enrolment_count ELSE 0 END) AS type5_total,
            SUM(CASE WHEN course_name = 'Health Sciences' THEN enrolment_count ELSE 0 END) AS type6_total
        FROM tank.courses";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Store total enrollment count for each course type in variables
    $row = $result->fetch_assoc();
    $type1Total = $row['type1_total'];
    $type2Total = $row['type2_total'];
    $type3Total = $row['type3_total'];
    $type4Total = $row['type4_total'];
    $type5Total = $row['type5_total'];
    $type6Total = $row['type6_total'];
} else {
    echo "No results found";
}

// SQL query to calculate total applicants for each job type
$SQL = "SELECT
            SUM(CASE WHEN job_title = 'Software Engineer' THEN applicant_count ELSE 0 END) AS job1_total,
            SUM(CASE WHEN job_title = 'Social Media Manager' THEN applicant_count ELSE 0 END) AS job2_total,
            SUM(CASE WHEN job_title = 'Human Resources Specialist' THEN applicant_count ELSE 0 END) AS job3_total,
            SUM(CASE WHEN job_title = 'Financial Analyst' THEN applicant_count ELSE 0 END) AS job4_total,
            SUM(CASE WHEN job_title = 'Graphic Designer' THEN applicant_count ELSE 0 END) AS job5_total,
            SUM(CASE WHEN job_title = 'Registered Nurse' THEN applicant_count ELSE 0 END) AS job6_total
        FROM tank.job_description";

$RESULT = $conn->query($SQL);

if ($RESULT->num_rows > 0) {
    // Store total applicant for each job type 
    $ROW = $RESULT->fetch_assoc();
    $job1Total = $ROW['job1_total'];
    $job2Total = $ROW['job2_total'];
    $job3Total = $ROW['job3_total'];
    $job4Total = $ROW['job4_total'];
    $job5Total = $ROW['job5_total'];
    $job6Total = $ROW['job6_total'];
} else {
    echo "No results found";
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Home</title>
    <title>Google Chart Generation</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
<header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"></img></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5 active">Home</a></li>
                <li><a href="course.php" class="nhan5">Courses</a></li>
                <li><a href="job.php" class="nhan5">Jobs</a></li>
                <li><a href="profile.php" class="nhan5">Your Profile</a></li>
             
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
</header>

<div id="wrapper">
    <div class="container mt-5 mb-5">
        <div class="col-lg-12">
            <h5 style="text-align:center">Course and Job Statistic</h5>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <!-- Chart 1 start -->
                <div id="piechart-1" style="width: 430px; height: 280px;"></div>
            </div>
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Course Type', 'Number'],
                        ['Computer Science', <?php echo $type1Total; ?>],
                        ['Digital Marketing', <?php echo $type2Total; ?>],
                        ['Business Administration', <?php echo $type3Total; ?>],
                        ['Finance', <?php echo $type4Total; ?>],
                        ['Chemical Engineering', <?php echo $type5Total; ?>],
                        ['Health Sciences', <?php echo $type6Total; ?>]
                    ]);
                    var options = {
                        title: 'Enrollment Counts by Course Type'
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart-1'));
                    chart.draw(data, options);
                }
            </script>
            <!-- Chart 1 ends -->
            <?php
            echo "Type 1 - Computer Science: " . $row['type1_total'] . " already enrolled.<br>";
            echo "Type 2 - Digital Marketing: " . $row['type2_total'] . " already enrolled.<br>";
            echo "Type 3 - Business Administration: " . $row['type3_total'] . " already enrolled.<br>";
            echo "Type 4 - Finance: " . $row['type4_total'] . " already enrolled.<br>";
            echo "Type 5 - Chemical Engineering: " . $row['type5_total'] . " already enrolled.<br>";
            echo "Type 6 - Health Sciences: " . $row['type6_total'] . " already enrolled.<br>";
            ?>

            <!-- Add other charts here -->
            <div class="form-group col-md-4">
      <div id="columnchart_values" style="width: 600px; height: 400px;"></div>
     </div>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Job Title', 'Number'],
                        ['Software Engineer', <?php echo $job1Total; ?>],
                        ['Social Media Manager', <?php echo $job2Total; ?>],
                        ['Human Resources Specialist', <?php echo $job3Total; ?>],
                        ['Financial Analyst', <?php echo $job4Total; ?>],
                        ['Graphic Designer', <?php echo $job5Total; ?>],
                        ['Registered Nurse', <?php echo $job6Total; ?>]
                    ]);
                    var options = {
                        title: 'Amount of applicants applying for each job'
                    };
                    var chart = new google.visualization.BarChart(document.getElementById('columnchart_values'));
                    chart.draw(data, options);
                }
     </script>
     <?php
            echo "Software Engineer: " . $ROW['job1_total'] . " already applied.<br>";
            echo "Social Media Manager: " . $ROW['job2_total'] . " already applied.<br>";
            echo "Human Resources Specialist: " . $ROW['job3_total'] . " already applied.<br>";
            echo "Financial Analyst: " . $ROW['job4_total'] . " already applied.<br>";
            echo "Graphic Designer: " . $ROW['job5_total'] . " already applied.<br>";
            echo "Registered Nurse: " . $ROW['job6_total'] . " already applied.<br>";
            ?>
    </div>

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
