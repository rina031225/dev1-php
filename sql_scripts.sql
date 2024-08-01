
--Create a database
CREATE DATABASE kredo_it_abroad;

--Create a table
CREATE TABLE employees (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `salary` float(8,2) NOT NULL,
    `department` varchar(50) NOT NULL,
    PRIMARY KEY(`id`)
);

--Create a record
INSERT INTO employees (`first_name`, `last_name`, `salary`, `department`)
VALUES
	('John', 'Davis', 20500, 'Audit'),
    ('Emily', 'Jackson', 32000, 'Legal'),
    ('Jack', 'Dawson', 31000, 'Legal'),
    ('Jack', 'Smith', 21000, 'Human Resources'),
    ('Janet', 'Jackson', 40500, 'IT'),
    ('Rose', 'Thompson', 36500, 'Audit');

UPDATE employees SET department="IT", salary=41000 WHERE id=2;
DELETE FROM employees WHERE id= 1;




--Create a database
CREATE DATABASE kredo;

--Create a table
CREATE TABLE employees(
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `emp_first_name` VARCHAR(30) NOT NULL,
    `emp_last_name` VARCHAR(30) NOT NULL,
    `wmp_country` VARCHAR(50) NOT NULL,
    `emp_gender` VARCHAR(1) NOT NULL,
    `emp_birthdate` DATE NOT NULL
    );

--Create a record
INSERT INTO employees (`emp_first_name`, `emp_last_name`, `wmp_country`,  `emp_gender`, `emp_birthdate`)
VALUES
	('John', 'Doe', 'New Zealand', 'M', '1990-1-26'),
    ('Emily', 'Davis', 'USA', 'F', '1980-4-23'),
    ('Jack', 'Dawson', 'USA', 'M', '1967-10-9');

UPDATE employees SET emp_birthdate="1990-3-26" WHERE id=1;
UPDATE employees SET emp_last_name="Johnson" WHERE id=2;

DELETE FROM employees WHERE id=3;






--Create a table
CREATE TABLE students( 
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    `stud_first_name` varchar(20) NOT NULL, 
    `stud_last_name` varchar(20) NOT NULL, 
    `stud_country` varchar(100) NOT NULL, 
    `stud_cource` varchar(5) NOT NULL, 
    `stud_year_leval` int NOT NULL 
    );

--Create a record
INSERT INTO employees (`emp_first_name`, `emp_last_name`, `wmp_country`,  `emp_gender`, `emp_birthdate`)
VALUES
	('John', 'Doe', 'New Zealand', 'M', '1990-1-26'),
    ('Emily', 'Davis', 'USA', 'F', '1980-4-23'),
    ('Jack', 'Dawson', 'USA', 'M', '1967-10-9');

SELECT emp_first_name, emp_last_name, wmp_country, emp_gender, emp_birthdate FROM employees;
SELECT * FROM employees WHERE id=2;
SELECT * FROM employees WHERE emp_gender="M";
SELECT emp_first_name, emp_last_name FROM employees WHERE wmp_country="USA";


UPDATE employees SET emp_birthdate="1990-3-26" WHERE id=1;
UPDATE employees SET emp_last_name="Johnson" WHERE id=2;

DELETE FROM employees WHERE id=3;


--Create a record
INSERT INTO students (`stud_first_name`, `stud_last_name`, `stud_country`, `stud_cource`, `stud_year_leval`)
VALUES
	('John', 'Christopher', 'USA', 'BSN', '1'),
    ('Izzy', 'Graham', 'Russia', 'BSEng', '4'),
    ('Alec', 'Bell', 'Australia', 'BSIT', '3');

UPDATE students SET stud_cource="BSA", stud_year_leval=2 WHERE stud_first_name="Alec", stud_last_name="Bell";

-- DELETE FROM students WHERE id=1;
-- DELETE FROM students WHERE id=2;
DELETE FROM students where id in(1,2)

SELECT stud_first_name, stud_last_name, stud_cource FROM students;
SELECT stud_last_name, stud_country FROM students WHERE id=3;
SELECT stud_first_name, stud_last_name, stud_cource, stud_year_leval FROM students WHERE id=1;

