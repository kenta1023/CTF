DROP TABLE IF EXISTS userlist;

CREATE TABLE userlist(
	id int auto_increment primary key,
	name varchar(30) not null,
	password varchar(30) not null,
	memo varchar(300) not null
	);

