SELECT 
    school_name,
	COUNT( inaugurated_date ) AS count_inaugurated_date 
FROM
	school 
GROUP BY
	inaugurated_date;