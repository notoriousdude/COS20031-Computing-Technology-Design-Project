<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <title>Register</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.html"><img src="images/logo.png" alt="" class="nhan3"></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.html" class="nhan5">Home</a></li>
                <li><a href="course.html" class="nhan5">Courses</a></li>
                <li><a href="job.html" class="nhan5">Jobs</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.html" class="nhan5 active"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>
    <div class="nhan10">
        <div class="nhan11">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                <h1>Registration form</h1>
                <div class="nhan16">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" placeholder="Enter your full name" name="fullname" required>
                </div>
                <div class="nhan16">
                    <label for="dateofbirth">DOB</label>
                    <input type="date" id="dateofbirth" placeholder="Enter your date of birth" name="dateofbirth" required>
                </div>
                <div class="nhan16">
                    <label for="gender">Gender</label>
                    <select name = "gender" id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="nhan16">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="nhan16">
                    <label for="address">Address</label>
                    <input type="text" id="address" placeholder="Enter your address" name="address" required>
                </div>
                <div class="nhan16">
                    <label for="phonenumber">Phone number</label>
                    <input type="text" id="phonenumber" placeholder="Enter your phone number" name="phonenumber" pattern="[0-9]+" required>
                </div>
                <div class="nhan16">
                    <label for="degree">Degree</label>
                    <input type="text" id="degree" placeholder="Enter your degree (Optional)" name="degree">
                </div>
                <div class="nhan16">
                    <label for="institution">Institution </label>
                    <input type="text" id="institution" placeholder="Enter your institution (Optional)" name="institution">
                </div>
                 <div class="nhan16">
                    <label for="institution">Institution </label>
                    <input type="text" id="institution" placeholder="Enter your institution (Optional)" name="institution">
                </div>
                <div class="nhan16">
                    <label for="jobexperiences">Job experiences </label>
                    <input type="text" id="jobexperiences" placeholder="Enter 1 of your past job position (Optional)" name="jobexperiences">
                </div>
                <div class="nhan16">
                    <label for="employer">Employer </label>
                    <input type="text" id="employer" placeholder="Enter the employer of the job (Optional)" name="employer">
                </div>
                <div class="nhan16">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username" name="username" required>
                </div>
                <div class="nhan16">
                    <label for="password1">Password</label>
                    <input type="password" id="password1" placeholder="Enter your password" name="password" required>
                </div>
                <div class="nhan16">
                    <label for="password2">Confirm password</label>
                    <input type="password" id="password2" placeholder="Confirm your password" name="cfpassword" required pattern="^.{6,}$">
                    <span id="passwordMatchError" style="color: red; display: none;">Passwords do not match.</span>
                </div>
                <button type="submit" class="nhan17">Register</button>
                <div class="nhan15">
                    <p>Already have an account?<a href="login.html"> Sign in</a></p>
                </div>
            </form>
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
    <script>
        function validateForm() {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;
            var passwordMatchError = document.getElementById("passwordMatchError");

            if (password1 !== password2) {
                passwordMatchError.style.display = "block";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

<?php
$host_name = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

$connect = mysqli_connect($host_name, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $dateofbirth = $_POST["dateofbirth"];
    $phonenumber = $_POST["phonenumber"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];


    // Insert data into the user_information table
    $sql = "INSERT INTO user_information (full_name, date_of_birth, gender, phone_number, email, address) VALUES ('$fullname', '$dateofbirth', '$gender', '$phonenumber', '$email', '$address')";
    
    if ($connect->query($sql) === TRUE) {
        // Data inserted into user_information table successfully

        // Now, insert data into the user_login table
        $username = $_POST["username"];
        $password = $_POST["password"];

        
        $sql = "INSERT INTO user_login (username, password, user_id) VALUES ('$username', '$password', LAST_INSERT_ID())";
        
        if ($connect->query($sql) === TRUE) {
            echo "Success";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>

