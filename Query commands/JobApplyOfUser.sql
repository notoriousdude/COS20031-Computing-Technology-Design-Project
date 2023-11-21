-- Replace 1 with the actual user_id you are interested in
SELECT
    mja.application_id,
    mja.user_id,
    ui.full_name,
    jd.job_id,
    jd.job_title
FROM
    manager_job_application mja
JOIN
    user_information ui ON mja.user_id = ui.user_id
JOIN
    job_description jd ON mja.job_id = jd.job_id
WHERE
    mja.user_id = 1;  -- Replace 1 with the actual user_id you are interested in