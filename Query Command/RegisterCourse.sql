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
