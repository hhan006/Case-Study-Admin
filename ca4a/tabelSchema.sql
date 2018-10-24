create table Prices
(   productid int unsigned not null auto_increment primary key,
    product_name char(30) not null,
    single_price float(10,2),
    double_price float(10,2)
);