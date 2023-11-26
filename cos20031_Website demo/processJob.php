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
    $jobTitle = $_POST["job_title"];
    $recruiter = $_POST["recruiter"];
    $applicationDeadline = $_POST["application_deadline"];
    $salary = $_POST["salary"];
    $workingLocation = $_POST["working_location"];
    $category = $_POST["category"];
    $applicantCount = $_POST["applicant_count"];

    $requirement = $_POST["requirement"];
    $benefit = $_POST["benefit"];

    // Insert data into the job_description table
    $sql = "INSERT INTO job_description (job_title, Recruiter, application_deadline, salary, working_location, category, applicant_count) 
    VALUES ('$jobTitle', '$recruiter', '$applicationDeadline', $salary, '$workingLocation', '$category', $applicantCount)";
    
    if ($connect->query($sql) === TRUE) {
    
            $job_id = $connect->insert_id; // Get the last inserted job_id

            // Now, insert data into the job_requirements table
            $sqlRequirement = "INSERT INTO job_requirements (job_id, requirement) VALUES ('$job_id', '$requirement')";
            if ($connect->query($sqlRequirement) === TRUE) {
                // Finally, insert data into the job_benefits table
                $sqlBenefit = "INSERT INTO job_benefits (job_id, benefit) VALUES ('$job_id', '$benefit')";
                if ($connect->query($sqlBenefit) === TRUE) {
                    echo "Success";
                } else {
                    echo "Error: " . $sqlBenefit . "<br>" . $connect->error;
                }
            } else {
                echo "Error: " . $sqlRequirement . "<br>" . $connect->error;
            }
    } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
    }
    header("Location: ./job.php");
    exit();
}
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      
    // Redirect the user to a thank you page after processing the registration
    //header("Location: course.php");
    //exit();
?>
