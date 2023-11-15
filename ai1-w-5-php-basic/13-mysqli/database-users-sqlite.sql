create table user
(
    id        integer not null
        constraint user_pk
        primary key autoincrement,
    username  text    not null,
    firstName text    not null,
    lastName  text    not null
);

