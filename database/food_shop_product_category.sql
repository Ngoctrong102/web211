create table product_category
(
    product_id  int not null,
    category_id int not null,
    primary key (product_id, category_id),
    constraint fk_product_category_category_id
        foreign key (category_id) references category (id),
    constraint fk_product_category_product_id
        foreign key (product_id) references product (id)
);

INSERT INTO food_shop.product_category (product_id, category_id) VALUES (5, 1);
INSERT INTO food_shop.product_category (product_id, category_id) VALUES (7, 1);
INSERT INTO food_shop.product_category (product_id, category_id) VALUES (5, 4);
INSERT INTO food_shop.product_category (product_id, category_id) VALUES (6, 4);
INSERT INTO food_shop.product_category (product_id, category_id) VALUES (6, 5);
INSERT INTO food_shop.product_category (product_id, category_id) VALUES (7, 6);