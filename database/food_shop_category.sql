create table category
(
    id    int auto_increment
        primary key,
    title varchar(256) not null
);

INSERT INTO food_shop.category (title) VALUES ('Sữa');
INSERT INTO food_shop.category (title) VALUES ('Trái cây');
INSERT INTO food_shop.category (title) VALUES ('Rau');
INSERT INTO food_shop.category (title) VALUES ('Thịt');