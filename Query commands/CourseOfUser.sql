-- Replace 1 with the actual user_id you are interested in
SELECT
    mcr.registration_id,
    mcr.user_id,
    ui.full_name,
    c.course_id,
    c.course_name
FROM
    manager_course_registration mcr
JOIN
    user_information ui ON mcr.user_id = ui.user_id
JOIN
    courses c ON mcr.course_id = c.course_id
WHERE
    mcr.user_id = 1;  -- Replace 1 with the actual user_id you are interested in
