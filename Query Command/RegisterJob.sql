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
