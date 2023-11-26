<?php
//Create connection to the database
$host_name = "feenix-mariadb.swin.edu.au";
$username = "s104212294";
$password = "271104";
$dbname = "s104212294_db";
$connect = mysqli_connect($host_name, $username, $password, $dbname);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve course data from the submitted form
    $courseName = $_POST["course_name"];
    $courseLength = $_POST["course_length"];
    $coursePrice = $_POST["course_price"];
    $category = $_POST["category"];
    $enrolmentCount = $_POST["enrolment_count"];
    $outlineText = $_POST["outline_text"];
    $outcomeText = $_POST["outcome_text"];

    // Insert data into the courses table
    $sql = "INSERT INTO courses (course_name, course_length, course_price, category, enrolment_count) 
    VALUES ('$courseName', '$courseLength', $coursePrice, '$category', $enrolmentCount)";
    
    if ($connect->query($sql) === TRUE) {
        // Data inserted into courses table successfully

            $course_id = $connect->insert_id; // Get the last inserted course_id

            // Now, insert data into the course_outline table
            $sqlOutline = "INSERT INTO course_outlines (course_id, outline_text) VALUES ('$course_id', '$outlineText')";
            if ($connect->query($sqlOutline) === TRUE) {
                // Data inserted into course_outline table successfully

                // Finally, insert data into the course_outcomes table
                $sqlOutcome = "INSERT INTO course_outcomes (course_id, outcome_text) VALUES ('$course_id', '$outcomeText')";
                if ($connect->query($sqlOutcome) === TRUE) {
                    echo "Success";
                } else {
                    echo "Error: " . $sqlOutcome . "<br>" . $connect->error;
                }
            } else {
                echo "Error: " . $sqlOutline . "<br>" . $connect->error;
            }
    } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
    }
    header("Location: ./course.php");
    exit();
}
      
    // Redirect the user to a thank you page after processing the registration
    //header("Location: course.php");
    //exit();
?>
