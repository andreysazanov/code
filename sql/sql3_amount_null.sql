SELECT a.surname, a.name FROM  `student` AS  `a` 
LEFT JOIN  `student_status` AS  `b` ON ( a.id = b.student_id ) 
LEFT JOIN  `payments` AS  `c` ON ( a.id = c.student_id ) 
WHERE b.status =  'lost' AND c.amount =0