#设置后续的sql语句编码
SET NAMES UTF8;
#试着删除数据库dangdang
DROP DATABASE IF EXISTS dangdang;
#创建数据库dangdang，指定的给保存数据时候的字符编码
CREATE DATABASE dangdang CHARSET=UTF8;
#进入dangdang
USE dangdang;
#创建保存书籍信息的表：dd_book bid  name  price  birthday  isOnsale
CREATE TABLE dd_book(
    bid INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64),
    price FLOAT(6,2),
    birthday VARCHAR(64),
    isOnsale BOOLEAN
);
#添加一本书籍的信息  x3
INSERT INTO dd_book VALUES(
    NULL,
    'python',
    35.5,
    '2015-11-27',
    true
);
INSERT INTO dd_book VALUES(
    NULL,
    'C++',
    70.8,
    '2011-1-10',
    false
);
INSERT INTO dd_book VALUES(
    NULL,
    'js',
    60.8,
    '2014-09-15',
    true
);
#删除编号为1的书籍
-- DELETE FROM dd_book WHERE bid=1;
#修改编号为2的书籍
UPDATE dd_book SET price=50 WHERE bid=2;
#查询出所有的书籍记录
SELECT * FROM dd_book;
#查询出编号为3的书籍记录
SELECT * FROM dd_book WHERE bid=3;