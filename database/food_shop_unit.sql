create table unit
(
    id    int auto_increment
        primary key,
    title varchar(50) not null
);

INSERT INTO food_shop.unit (title) VALUES ('Kg');
INSERT INTO food_shop.unit (title) VALUES ('Bó');
INSERT INTO food_shop.unit (title) VALUES ('Lạng');