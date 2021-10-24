create table product
(
    id          int auto_increment
        primary key,
    name        varchar(256)  not null,
    thumbnails  varchar(256)  not null,
    rating      int default 0 not null,
    description text          not null,
    unit_id     int           not null,
    price       int           not null,
    quantity    int           not null,
    constraint fk_product_unit_id
        foreign key (unit_id) references unit (id)
);

INSERT INTO food_shop.product (name, thumbnails, rating, description, unit_id, price, quantity) VALUES ('Vinamilk', '/upload/images/kazama.jpg', 0, 'Đây là sữa tiệt trùng', 2, 121212, 12);
INSERT INTO food_shop.product (name, thumbnails, rating, description, unit_id, price, quantity) VALUES ('Rau ngò', '/upload/images/shin.jpg', 0, 'Rau này thơm lắm', 3, 15000, 15);
INSERT INTO food_shop.product (name, thumbnails, rating, description, unit_id, price, quantity) VALUES ('Bò cube', '/upload/images/avatar_mentor.jpg', 0, 'Món này ngon lắm', 4, 10000, 100);