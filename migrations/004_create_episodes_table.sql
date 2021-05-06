USE gebd;

CREATE TABLE episodes (
    id integer auto_increment primary key,
    broadcast_date date,
    season_order integer not null,
    show_order integer not null,
    created_at datetime not null default now(),
    updated_at datetime,
    deleted_at datetime,
    season_id integer not null
);

ALTER TABLE episodes ADD CONSTRAINT fk_season FOREIGN KEY (season_id) REFERENCES seasons(id);