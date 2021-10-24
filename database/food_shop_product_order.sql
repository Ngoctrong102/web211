create table product_order
(
    order_id   int not null,
    product_id int not null,
    quantity   int not null,
    unit_id    int not null,
    price      int not null,
    primary key (order_id, product_id),
    constraint fk_product_order_order_id
        foreign key (order_id) references `order` (id),
    constraint fk_product_order_product_id
        foreign key (product_id) references product (id),
    constraint fk_product_order_unit_id
        foreign key (unit_id) references unit (id)
);

