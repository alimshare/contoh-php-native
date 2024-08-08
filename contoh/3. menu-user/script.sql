CREATE DATABASE db_test;

USE db_test;

CREATE TABLE user (
    username varchar(100) not null,
    password varchar(255) not null,
    primary key (username)
);

INSERT INTO user (username,password) VALUES('admin', sha1('password'));