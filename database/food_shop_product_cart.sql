create table product_cart
(
    user_id    int not null,
    product_id int not null,
    quantity   int not null,
    primary key (user_id, product_id),
    constraint fk_product_cart_product_id
        foreign key (product_id) references product (id),
    constraint fk_product_cart_user_id
        foreign key (user_id) references user (id)
);

