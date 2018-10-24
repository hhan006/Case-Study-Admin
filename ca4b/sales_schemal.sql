create table sales 
(   
    sales_id int unsigned not null auto_increment primary key,
    productid int unsigned not null, 
    quantity int unsigned not null,
    category char(30) not null,
    sales float(20,2) not null,
    transaction_date date not null
);