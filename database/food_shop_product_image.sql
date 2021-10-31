create table product_image
(
    product_id int          not null,
    image_url  varchar(256) not null,
    primary key (product_id, image_url),
    constraint fk_product_image_product_id
        foreign key (product_id) references product (id)
);

INSERT INTO food_shop.product_image (product_id, image_url) VALUES (5, '/upload/images/kazama.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (5, '/upload/images/shin.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (6, '/upload/images/kazama.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (6, '/upload/images/shin.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (7, '/upload/images/avatar_mentor.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (7, '/upload/images/kazama.jpg');
INSERT INTO food_shop.product_image (product_id, image_url) VALUES (7, '/upload/images/shin.jpg');