-------------------------------User register for course--------------------------------------

-- Assuming the user with user_id = 1 exists and wants to register for an existing course with course_id = 1
SET @user_id := 1;
SET @course_id := 1;

-- Fetch user's full_name based on user_id
SELECT full_name INTO @full_name FROM user_information WHERE user_id = @user_id;

-- Fetch course details based on course_id
SELECT course_name INTO @course_name FROM courses WHERE course_id = @course_id;

-- Insert the course registration record
INSERT INTO manager_course_registration (user_id, full_name, course_id, course_name)
VALUES (@user_id, @full_name, @course_id, @course_name);

-- Increment the enrolment_count in courses
UPDATE courses SET enrolment_count = enrolment_count + 1 WHERE course_id = @course_id;

-------------------------------User register for job--------------------------------------

-- Assuming the user with user_id = 1 exists and wants to apply for an existing job with job_id = 1
SET @user_id := 1;
SET @job_id := 1;

-- Fetch user's full_name based on user_id
SELECT full_name INTO @full_name FROM user_information WHERE user_id = @user_id;

-- Fetch job details based on job_id
SELECT job_title INTO @job_title FROM job_description WHERE job_id = @job_id;

-- Insert the job application record
INSERT INTO manager_job_application (user_id, full_name, job_id, job_title)
VALUES (@user_id, @full_name, @job_id, @job_title);

-- Increment the applicant_count in job_description
UPDATE job_description SET applicant_count = applicant_count + 1 WHERE job_id = @job_id;
