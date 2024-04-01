CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255),
    created_at datetime not null default current_date,
    primary key (id)
    );

)