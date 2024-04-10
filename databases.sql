CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    pwd VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE 1mi (
    id int(11) NOT NULL AUTO_INCREMENT,
    monday VARCHAR(255) NOT NULL,
    tuesday VARCHAR(255) NOT NULL,
    wednesday VARCHAR(255) NOT NULL,
    thursday VARCHAR(255) NOT NULL,
    friday VARCHAR(255) NOT NULL,
    saturday VARCHAR(255) NOT NULL,
    sunday VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE 5k (
    id int(11) NOT NULL AUTO_INCREMENT,
    monday VARCHAR(255) NOT NULL,
    tuesday VARCHAR(255) NOT NULL,
    wednesday VARCHAR(255) NOT NULL,
    thursday VARCHAR(255) NOT NULL,
    friday VARCHAR(255) NOT NULL,
    saturday VARCHAR(255) NOT NULL,
    sunday VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE 10k (
    id int(11) NOT NULL AUTO_INCREMENT,
    monday VARCHAR(255) NOT NULL,
    tuesday VARCHAR(255) NOT NULL,
    wednesday VARCHAR(255) NOT NULL,
    thursday VARCHAR(255) NOT NULL,
    friday VARCHAR(255) NOT NULL,
    saturday VARCHAR(255) NOT NULL,
    sunday VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO 1mi (monday, tuesday, wednesday, thursday, friday, saturday, sunday)
    VALUES
        ('walk 20 min', 'walk 4 min, run 1 min for 20 min', 'rest', 'walk 4 min, run 1 min for 20 min',
            'walk 4 min, run 1 min for 20 min', 'rest', 'run 2 min, walk 3 min for 20 min'),
        ('walk 20 min', 'run 2 min, walk 3 min for 20 min', 'rest', 'run 2 min, walk 3 min for 20 min',
            'rest', 'run 2 min, walk 3 min for 20 min', 'run 3 min, walk 2 min for 20 min'),
        ('walk 25 min', 'run 3 min, walk 2 min for 20 min', 'rest', 'run 3 min, walk 2 min for 20 min',
            'rest', 'run 3 min, walk 2 min for 20 min', 'run 4 min, walk 2 min for 24 min'),
        ('walk 20 min', 'run 4 min, walk 2 min for 24 min', 'rest', 'run 4 min, walk 2 min for 24 min',
            'rest', 'run 4 min, walk 2 min for 24 min', 'rest'),
        ('walk 30 min', 'run 4 min, walk 2 min for 24 min', 'run 5 min, walk 2 min for 24 min', 'rest',
            'run 6 min, walk 2 min for 26 min', 'rest', 'run 7 min, walk 2 min for 20 min'),
        ('walk 30 min', 'run 4 min, walk 2 min for 30 min', 'run 7 min, walk 2 min for 20 min', 'rest',
            'run 9 min, walk 2 min for 22 min', 'run 4 min, walk 2 min for 24 min', 'run a mile!');

INSERT INTO 5k (monday, tuesday, wednesday, thursday, friday, saturday, sunday)
    VALUES
        ('walk 20 min', 'run 30 sec, walk 30 sec for 1 mile', 'rest', 'run 1 min, walk 1 min for 1 mile',
            'rest', 'run 1 min, walk 1 min for 1 mile', 'run 5 min, walk 1 min for 2 miles'),
        ('walk 20 min', 'run 4 min, walk 30 sec for 2 miles', 'rest', 'run 1 min, walk 1 min for 1.5 miles',
            'rest', 'run 1 min, walk 1 min for 1.5 miles', 'run 7 min, walk 1 min for 2 miles'),
        ('walk 25 min', 'run 5 min, walk 30 sec for 2 miles', 'rest', 'run 2 min, walk 1 min for 1.5 miles',
            'rest', 'run 2 min, walk 1 min for 1.5 miles', 'run 8 min, walk 30 sec for 2.5 miles'),
        ('walk 30 min', 'run 5 min, walk 30 sec for 2.5 miles', 'rest', 'run 2 min, walk 1 min for 2 miles',
            'rest', 'run 2 min, walk 1 min for 2 miles', 'run for 2.5 miles, walking for 30 sec if needed'),
        ('walk 35 min', 'run 8 min, walk 30 sec for 2.5 miles', 'rest', 'run 2 min, walk 1 min for 2 miles',
            'rest', 'run 2 min, walk 1 min for 2 miles', 'run 3 miles, walking for 30 sec if needed'),
        ('walk 40 min', 'run 8 min, walk 30 sec for 2 miles', 'rest', 'run 2 min, walk 1 min',
            'rest', 'run 2 min, walk 1 min', 'run a 5k!');

INSERT INTO 10k (monday, tuesday, wednesday, thursday, friday, saturday, sunday)
VALUES
    ('walk 30 min', 'run 1 min, walk 2 min for 30 min', 'rest', 'run 1 min, walk 2 min for 30 min',
        'run 1 min, walk 2 min', 'rest', 'run 1.5 miles'),
    ('walk 30 min', 'run 1 min, walk 1 min for 30 min', 'rest', 'run 1 min, walk 1 min for 30 sec',
        'run 90 sec, walk 30 sec for 30 min', 'rest', 'run 2 miles'),
    ('walk 35 min', 'run 90 sec, walk 30 sec for 30 min', 'rest', 'run 90 sec, walk 30 sec for 30 min',
        'run 2 min, walk 1 min for 30 min', 'rest', 'run 2.5 miles'),
    ('walk 35 min', 'run 2 min, walk 1 min for 30 min', 'rest', 'run 2 min, walk 1 min for 30 min',
        'rest', 'run 2.5 miles', 'run 3.5 miles'),
    ('walk 30 min', 'run 2.5 miles', 'run 1.5 miles', 'rest', 'run 2.5 miles',
        'rest', 'run 4 miles'),
    ('walk 40 min', 'run 2.5 miles', 'rest', 'run 2.5 miles', 'run 1.5 miles',
        'rest', 'run 4.5 miles'),
    ('walk 30 min', 'run 3 miles', 'run 4 miles', 'rest', '3 miles', 'rest', 'run 5 miles'),
    ('walk 20 min', 'run 3 miles', 'run 4 miles', 'rest', 'run 3 miles', 'run 2 miles', 'run a 10K');