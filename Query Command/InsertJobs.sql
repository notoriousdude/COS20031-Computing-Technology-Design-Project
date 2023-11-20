-- Insert job information
INSERT INTO job_description (job_title, recruiter, application_deadline, salary, working_location, category, applicant_count)
VALUES
('Software Engineer', 'Tech Company X', '2023-12-15', 80000.00, 'Cityville', 'IT', 0);

-- Get the job_id generated for the inserted job information
SET @job_id_1 := LAST_INSERT_ID();

-- Insert job requirements
INSERT INTO job_requirements (job_id, requirement)
VALUES
(@job_id_1, 'Bachelor’s degree in Computer Science or related field');

-- Insert job benefits
INSERT INTO job_benefits (job_id, benefit)
VALUES
(@job_id_1, 'Health insurance, retirement plan, flexible working hours');

-- Insert another job
INSERT INTO job_description (job_title, recruiter, application_deadline, salary, working_location, category, applicant_count)
VALUES
('Data Scientist', 'Data Analytics Corp', '2023-12-25', 90000.00, 'Tech City', 'IT', 0);

-- Get the job_id generated for the inserted job information
SET @job_id_2 := LAST_INSERT_ID();

-- Insert job requirements for the second job
INSERT INTO job_requirements (job_id, requirement)
VALUES
(@job_id_2, 'Master’s degree in Data Science or a related field');

-- Insert job benefits for the second job
INSERT INTO job_benefits (job_id, benefit)
VALUES
(@job_id_2, 'Flexible work schedule, stock options');
