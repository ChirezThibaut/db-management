USE gebd;

CREATE TABLE seasons (
    id integer auto_increment primary key,
    title varchar(255),
    start_date date,
    end_date date,
    show_order integer not null,
    created_at datetime not null default now(),
    updated_at datetime,
    deleted_at datetime,
    show_id integer not null,
    foreign key (show_id) references shows(id)
);