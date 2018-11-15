create database demo_db;
use demo_db;
create table things(
    id int(11) unsigned auto_increment primary key,
    name varchar(255) not null,
    price int(10)
);

insert into things(name,price)
    values("carrot", 1);
insert into things(name,price)
    values("broccoli", 2);
insert into things(name,price)
    values("aubergine", 5);