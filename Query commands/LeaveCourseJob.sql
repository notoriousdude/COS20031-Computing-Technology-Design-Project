-------------------------------User leave course--------------------------------------

-- Replace 1 with the actual registration_id of the course registration you want to delete
DELETE FROM manager_course_registration WHERE registration_id = 1;

-------------------------------User leave job--------------------------------------

-- Replace 1 with the actual application_id of the job application you want to withdraw
DELETE FROM manager_job_application WHERE application_id = 1;