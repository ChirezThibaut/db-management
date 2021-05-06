USE gebd;

CREATE TABLE shows (
    id integer auto_increment primary key,
    title varchar(255) unique not null,
    start_date date,
    end_date date,
    status enum('ended', 'in progress', 'upcoming') not null default 'upcoming',
    created_at datetime not null default now(),
    updated_at datetime,
    deleted_at datetime
);