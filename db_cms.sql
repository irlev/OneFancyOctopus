CREATE TABLE user(
	username CHAR(15) PRIMARY KEY,
	password CHAR(15),
	email CHAR(15),
	firstname CHAR(15),
	lastname CHAR(25)	
)ENGINE=INNODB;

CREATE TABLE venue(
	venue_id INT PRIMARY KEY AUTO_INCREMENT,
	description VARCHAR(100)
)ENGINE=INNODB;

CREATE TABLE event(
	event_id INT PRIMARY KEY AUTO_INCREMENT,
	event_creator CHAR(15),
	event_name VARCHAR(100),
	venue INT,
	C_Vst DATE,
	C_Vet DATE,
	S_time CHAR(5) DEFAULT '08:00',
	E_time CHAR(5) DEFAULT '24:00',
FOREIGN KEY(venue) REFERENCES venue(venue_id),
FOREIGN KEY(event_creator) REFERENCES user(username)
)ENGINE=INNODB;

CREATE TABLE j_attends(
event INT,
user CHAR(15),
FOREIGN KEY(user) REFERENCES user(username),
FOREIGN KEY(event) REFERENCES event(event_id)
)ENGINE=INNODB;


--=========================================================================
INSERT INTO user(
 
)
VALUES(
 'qwert',
 'qwert',
 'a@b.mail',
 'Katya',
 'Petrova'
);

INSERT INTO user(
 
)
VALUES(
 'yuiop',
 'yuiop',
 'b@b.mail',
 'Lena',
 'Smirnova'
);
--=============================================================================
INSERT INTO venue( 	
	description 
)
VALUES(
 'B303'
);

INSERT INTO venue( 	
	description 
)
VALUES(
 'B311A'
);

INSERT INTO venue( 	
	description 
)
VALUES(
 'Helsinkin airport'
);
--==========================================================================
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
	'qwert',--username of logged in user
 	'Internet programming class',
 	1,
 	'2014-12-03',
 	'2014-12-03',
 	'10:00',
 	'12:30'

 
);

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
	'yuiop',
 'Database Management class',
 	2,
 '2014-12-04',
 '2014-12-04',
 '11:00',
 '12:30'

 
);

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
 'Meet a friend at the airport',
 	3,
 '2014-12-05',
 '2014-12-05',
 '10:30',
 '12:30'
);

--===========================================================================
INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'1',
 	'qwert'
);

INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'2',
 	'yuiop'
);

INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'3',
 	'yuiop'
);
INSERT INTO j_attends( 	
	event,
	user
)
VALUES(
 	'3',
 	'qwert'
);





