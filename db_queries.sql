



--CREATE ACCOUNT
--1. As a user I want to create an account by setting a username, password, email, first name  and last name.


INSERT INTO user(
 
)
VALUES(
 'qwert',-- user input <?php ?>.
 'qwert',-- user input <?php ?>.
 'a@b.mail',-- user input <?php ?>.
 'Katya',-- user input <?php ?>.
 'Petrova'-- user input <?php ?>.
);


--USE ACCOUNT
--2. As a user I want  to be able to login with my username and password
--query to check credentials
SELECT
username,
password
FROM
user
WHERE
username = 'qwert' AND password='qwert';-- user input <?php ?>.

--3. As a user I want my name to be displayed in the calendar
SELECT
firstname,
lastname
FROM
user
WHERE
username = 'qwert';

--4. As a user I want to see events in the calendar modes(event name, event times, event dates, venue)
SELECT
	e.event_name,
	e.C_Vst,
	e.C_Vet,
	e.S_time,
	e.E_time,
	v.description
FROM
event e,
user u,
j_attends a,
venue v
WHERE
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
v.venue_id = e.venue;


-- OTHER USERS EVENTS
--5. As a user I want to see a list of all upcoming events of all users(event name – date)
SELECT
e.event_name,
e.C_Vst	
FROM
event e;

--6. As a user by clicking on event from the list I want to see a more detail information  (event name, event times, event dates, venue) including other users who comes to event.

SELECT
	u.firstname,
	u.lastname,
	e.event_name,
	e.C_Vst,
	e.C_Vet,
	e.S_time,
	e.E_time,
	v.description
FROM
	event e,
	user u,
	j_attends a,
	venue v
WHERE
	e.event_name = 'Meet a friend at the airport' AND
	u.username = a.user AND
	e.event_id = a.event AND
	v.venue_id = e.venue;

--6a. As a user I want to add other user's events from the list to my calendar

INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'2',
 	'qwert'
);

--CREATE OWN EVENT
--7. As a user I want to create events +
--8. As a user I want to give an event a specific name +
--9. As a user I want to set a start date and end date to event +
--10. As a user I want to set a start time and end time to event +
--11. As a user I want to sent a venue to an event
INSERT INTO venue( 	
	description 
)
VALUES(
 'B302'
);

--=============================================================================

INSERT INTO event( 	
	event_creator,
	event_name,
	venue,
	C_Vst,
	C_Vet,
	S_time,
	E_time
)
VALUES(
	'qwert',
 	'3D animation class',
 	4,
	'2014-12-14',
 	'2014-12-14',
 	'08:30',
 	'14:00'
);


--===========================================================================
INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'4',
 	'qwert'
);


--12. As a user I want a start time to be 8:00 by defalt if not defined otherwise +
--13.  As a user I want by defalt a duration of event to be the whole day if not defined otherwise
CREATE TABLE event(
	event_id INT PRIMARY KEY AUTO_INCREMENT,
	event_name VARCHAR(100),
	venue INT,
	C_Vst DATE,
	C_Vet DATE,
	S_time CHAR(5) DEFAULT '08:00',
	E_time CHAR(5) DEFAULT '24:00',
FOREIGN KEY(venue) REFERENCES venue(venue_id)
)ENGINE=INNODB;

INSERT INTO event( 
	event_creator,	
	event_name,
	venue,
	C_Vst,
	C_Vet
)
VALUES(
	'qwert'
 '3D animation class',
 	4,
 '2014-12-14',
 '2014-12-14'
);

--UPDATE EVENT
--14. As a user I want to be able to update a name of the event I created
UPDATE
user u,
j_attends a,
event e  
SET event_name = '3D design class'
WHERE 
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D animation class';
--15. As a user I want to be able to update start date of the event I created
UPDATE 
user u,
j_attends a,
event e 
SET C_Vst ='2014-12-12'
WHERE 
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D design class' ;
--16. As a user I want to be able to update end date of the event I created
UPDATE 
user u,
j_attends a,
event e 
SET C_Vet ='2014-12-12'
WHERE
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D design class' ;
--17. As a user I want to be able to update start time of the event I created
UPDATE 
user u,
j_attends a,
event e 
SET S_time ='10:00'
WHERE
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D design class' ;
--18. As a user I want to be able to update end time of the event I created
UPDATE 
user u,
j_attends a,
event e 
SET E_time = '12:30'
WHERE 
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D design class' ;
--19. As a user I want to be able to update a venue of the event I created

UPDATE
user u,
j_attends a,
event e, 
venue v
SET description = 'B311B'
WHERE 
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_creator = 'qwert' AND
e.event_name = '3D design class' AND
e.venue = v.venue_id;

--DELETE
--20. As a user I want to be able to delete the event from my calendar without removing it from other people calendars

SELECT--gives an event id of event to be deleted
a.event 
FROM
user u,
j_attends a,
event e 
WHERE
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
e.event_name = '3D design class';

DELETE FROM 
j_attends
WHERE
user ='qwert' AND
event = 4;
;--use a selected id




