CREATE TABLE character (
	name varchar(80) primary key,
	class varchar(30),
	height int,
	weight int,
	age int,
	level int
);

CREATE TABLE geographic (
	name varchar(80) primary key,
	origin varchar(80),
	currentLocation varchar(80)
);

INSERT INTO geographic(
	name,
	origin,
	currentLocation
)
VALUES(
	'Maphe',
	'Central',
	'Capital'	
);

INSERT INTO geographic(
	name,
	origin,
	currentLocation
)
VALUES(
	'Bryton',
	'South',
	'Capital'	
);

INSERT INTO geographic(
	name,
	origin,
	currentLocation
)
VALUES(
	'Kendr',
	'???',
	'Jackalope'	
);

INSERT INTO character(
	name,
	class,
	height,
	weight,
	age,
	level
)
VALUES(
	'Maphe',
	'Cleric',
	5,
	145,
	22,
	15
);

INSERT INTO character(
	name,
	class,
	height,
	weight,
	age,
	level
)
VALUES(
	'Bryton',
	'Rogue',
	6,
	150,
	22,
	12
);