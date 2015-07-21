SELECT a.surname, a.name FROM  `student` AS  `a` 
LEFT JOIN  `student_status` AS  `b` ON ( a.id = b.student_id )
WHERE a.gender ='unknown' AND b.status='vacation'