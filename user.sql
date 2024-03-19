CREATE TABLE user (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user VARCHAR(64) NOT NULL UNIQUE ,
    password VARCHAR(64) NOT NULL,
    date TIMESTAMP

);

create table info (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    age int(2) NOT NULL,
    location VARCHAR(256) NOT NULL,
    date TIMESTAMP
);

CREATE TABLE plan (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    skill int(32) NOT NULL,
    goal int(32) NOT NULL,
    plan VARCHAR(256) NOT NULL,
    date TIMESTAMP NOT NULL
);


create table music (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    country BIT NOT NULL,
    pop BIT NOT NULL,
    classical BIT NOT NULL,
    edm BIT NOT NULL,
    rock BIT NOT NULL,
    latin BIT NOT NULL,
    date TIMESTAMP NOT NULL
);

create table pace (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    skill int(32) NOT NULL,
    pace float(32),
    date TIMESTAMP NOT NULL
);

