USE gebd;

CREATE TABLE genres (
    id integer auto_increment primary key,
    name varchar(255) not null,
    created_at datetime not null default now(),
    updated_at datetime,
    deleted_at datetime
);