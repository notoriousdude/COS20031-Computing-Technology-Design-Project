-- Replace 1 with the actual user_id you want to delete
SET @userIdToDelete = 1;

-- Delete from the related tables
DELETE FROM manager_course_registration WHERE user_id = @userIdToDelete;
DELETE FROM manager_job_application WHERE user_id = @userIdToDelete;
DELETE FROM user_login WHERE user_id = @userIdToDelete;
DELETE FROM working_experiences WHERE user_id = @userIdToDelete;
DELETE FROM educational_backgrounds WHERE user_id = @userIdToDelete;
DELETE FROM user_information WHERE user_id = @userIdToDelete;