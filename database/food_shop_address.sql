create table address
(
    id      int auto_increment
        primary key,
    user_id int          not null,
    address varchar(256) not null,
    constraint fk_address_user_id
        foreign key (user_id) references user (id)
);

INSERT INTO food_shop.address (user_id, address) VALUES (1, 'Số 4, đường 123, Quận 1, Vũng Tàu');
INSERT INTO food_shop.address (user_id, address) VALUES (1, 'Cần Thơ');
INSERT INTO food_shop.address (user_id, address) VALUES (1, 'bạc liêu');
INSERT INTO food_shop.address (user_id, address) VALUES (1, 'Cà mau');
INSERT INTO food_shop.address (user_id, address) VALUES (1, 'Bình ĐỊNh');