create table user
(
    id         int auto_increment
        primary key,
    email      varchar(100)               not null,
    password   varchar(256)               not null,
    first_name varchar(10)                not null,
    last_name  varchar(20)                not null,
    avatar     varchar(256)               null,
    phone      varchar(15)                null,
    role       enum ('admin', 'customer') not null,
    constraint uc_user_email
        unique (email)
);

INSERT INTO food_shop.user (email, password, first_name, last_name, avatar, phone, role) VALUES ('trong04102000@gmail.com', '$2y$12$6gEac6OXBrLxoQq66BrXOOFFgyVQq/pRunGi3dTInphzsN6qIfzpq', 'Võ Ngọc', 'Trọng', null, '123', 'customer');