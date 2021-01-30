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