create table `order`
(
    id         int auto_increment
        primary key,
    user_id    int       not null,
    address_id int       not null,
    created_at timestamp not null,
    constraint fk_order_address_id
        foreign key (address_id) references address (id),
    constraint fk_order_user_id
        foreign key (user_id) references user (id)
);

