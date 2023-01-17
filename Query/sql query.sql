/*part1 :*/ 
select * from worker
select * from customer
select w_name from worker
select w_name from worker where w_access = 0
select c_name from customer where c_id = 'yo19'
select (w_salary*2) from worker
select count((w_salary)) from worker
select distinct c_name from customer
select distinct to_name from tool
select w_name as "My Name" from worker
select w_name  from worker
select w_name from worker where w_id is null
select c_phone from customer where c_id is null
select w_name from worker where w_access > 0
select w_name from worker where w_access > 0 and w_ssin is null
select w_name from worker where w_access > 0 or w_ssin is null
select w_name from worker where not w_access > 0 
select w_name from worker where w_access not in(0)
select w_name from worker where w_access not in(0,1)
select w_name from worker where not w_access in(0)
select w_name from worker where not w_access in(0,1)
select w_name from worker where not w_access not in(0)
select w_name from worker order by w_access
select w_name,w_access from worker order by w_access desc
select w_name from worker where w_access between 0 and 2
/*part2 :*/ 
/* retrieve num of employees name group by address*/
select c_address,Count(c_name) from customer group by c_address 
select distinct c_address,Count(c_name) from customer group by c_address 
/* retrieve num of complain(s) content group (worker_id) then(c_id)*/
select w_id,c_id,COUNT(com_content) from complain group by w_id,c_id
/* Same previous query but using alias name*/
select w_access x,max(w_salary) from worker group by w_access order by x desc
/* retrieve num of employees name group by address*/
select w_access,max(w_salary) from worker group by w_access
/* retrieve max salary for each access (group by access) + using alias name + order by x*/
select w_access x,max(w_salary) from worker group by w_access order by x
/* retrieve all employees salaries numbers group by access that > 2000*/
select w_access,count(w_salary) from worker group by w_access having count(w_salary)<2000
/* retrieve max salary in each access that > 2000*/
select w_access,max(w_salary) from worker group by w_access having max(w_salary)>2000
/* Retreieve  all employees salaries group by access except if access is 2*/
select w_access,COUNT(w_salary) from worker where w_access != 2 group by w_access
/* select all workers name that they salary is more than Youmna's salary (Sub Query)*/


/*part3 :*/ 
select w_name from worker where w_salary > (select w_salary from worker where w_name = 'Youmna')

SELECT l.w_id, w.w_id, w.w_name  
FROM login_record l INNER JOIN worker w 
ON l.w_id = w.w_id;


SELECT test.t_ran_code random, to_price  
FROM test 
INNER JOIN to_t common 
ON test.t_ran_code = common.to_code INNER JOIN tool 
ON common.to_code = tool.to_code


SELECT worker.w_name , customer.c_name , worker.w_access , customer.c_age 
FROM worker 
INNER JOIN w_c common 
ON worker.w_id = common.w_id 
INNER JOIN customer 
ON common.c_id = customer.c_id

SELECT login_record.login_id, worker.w_name 
FROM login_record 
INNER JOIN worker 
ON worker.w_id = login_record.w_id


SELECT login_record.login_id, worker.w_name 
FROM login_record 
INNER JOIN worker 
ON worker.w_id = login_record.w_id

SELECT complain.com_content, complain.com_id , worker.w_name 
FROM complain 
INNER JOIN worker
ON worker.w_id = complain.w_id

SELECT complain.com_content, complain.com_id , worker.w_name 
FROM complain 
left JOIN worker 
ON worker.w_id = complain.w_id

SELECT complain.com_content, complain.com_id , worker.w_name 
FROM complain 
right JOIN worker 
ON worker.w_id = complain.w_id

SELECT worker.w_name , customer.c_name , worker.w_access , customer.c_age 
FROM worker 
right JOIN w_c common 
ON worker.w_id = common.w_id 
left JOIN customer 
ON common.c_id = customer.c_id


SELECT complain.com_content, complain.com_id , worker.w_name 
FROM complain 
FULL OUTER JOIN worker 
ON worker.w_id = complain.w_id


