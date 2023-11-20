-- Insert course information
INSERT INTO courses (course_name, course_length, course_price, category, enrolment_count)
VALUES
('Web Development Fundamentals', 8, 199.99, 'Programming', 0);

-- Get the course_id generated for the inserted course information
SET @course_id_1 := LAST_INSERT_ID();

-- Insert course outline
INSERT INTO course_outlines (course_id, outline_text)
VALUES
(@course_id_1, 'Introduction to HTML and CSS, Basic JavaScript Concepts, Building Responsive Websites');

-- Insert course outcome
INSERT INTO course_outcomes (course_id, outcome_text)
VALUES
(@course_id_1, 'Ability to create and style a basic website, Understanding of fundamental programming concepts');

-- Insert another course
INSERT INTO courses (course_name, course_length, course_price, category, enrolment_count)
VALUES
('Data Science Bootcamp', 12, 299.99, 'Data Science', 0);

-- Get the course_id generated for the inserted course information
SET @course_id_2 := LAST_INSERT_ID();

-- Insert course outline for the second course
INSERT INTO course_outlines (course_id, outline_text)
VALUES
(@course_id_2, 'Introduction to Data Analysis, Machine Learning Fundamentals, Data Visualization Techniques');

-- Insert course outcome for the second course
INSERT INTO course_outcomes (course_id, outcome_text)
VALUES
(@course_id_2, 'Proficiency in data analysis tools, Understanding of machine learning concepts');
