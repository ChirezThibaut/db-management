USE gebd;

CREATE TABLE genres_shows (
    genre_id integer not null,
    show_id integer not null,
    foreign key (genre_id) references genres(id),
    foreign key (show_id) references shows(id)
);