-- Insert user information
INSERT INTO user_information (full_name, date_of_birth, gender, phone_number, email, address)
VALUES
('John Doe', '1990-05-15', 'Male', '123-456-7890', 'john.doe@example.com', '123 Main St, Cityville');

-- Get the user_id generated for the inserted user information
SET @user_id := LAST_INSERT_ID();

-- Insert educational background
INSERT INTO educational_backgrounds (user_id, degree, institution)
VALUES
(@user_id, 'Bachelor of Science', 'University A');

-- Insert working experience
INSERT INTO working_experiences (user_id, job_title, employer)
VALUES
(@user_id, 'Software Engineer', 'Tech Company X');

-- Insert user login
INSERT INTO user_login (user_id, username, password)
VALUES
(@user_id, 'john_doe', 'password123');
