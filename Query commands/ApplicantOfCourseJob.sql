-------------------------------Show applicants of course--------------------------------------

-- Replace 1 with the actual course_id you are interested in
SELECT
    c.course_id,
    c.course_name,
    c.enrolment_count,
    mcr.registration_id,
    mcr.user_id,
    ui.full_name
FROM
    courses c
LEFT JOIN
    manager_course_registration mcr ON c.course_id = mcr.course_id
LEFT JOIN
    user_information ui ON mcr.user_id = ui.user_id
WHERE
    c.course_id = 1;  -- Replace 1 with the actual course_id you are interested in


-------------------------------Show applicants of job--------------------------------------

-- Replace 1 with the actual job_id you are interested in
SELECT
    jd.job_id,
    jd.job_title,
    jd.applicant_count,
    mja.application_id,
    mja.user_id,
    ui.full_name
FROM
    job_description jd
LEFT JOIN
    manager_job_application mja ON jd.job_id = mja.job_id
LEFT JOIN
    user_information ui ON mja.user_id = ui.user_id
WHERE
    jd.job_id = 1;  -- Replace 1 with the actual job_id you are interested in
