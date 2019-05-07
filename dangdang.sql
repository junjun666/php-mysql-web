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
    bid INT(12) PRIMARY KEY,
    name VARCHAR(64),
    price FLOAT(6,2),
    birthday VARCHAR(64),
    isOnsale BOOLEAN
);
CREATE TABLE user_info(
    bid INT(12) PRIMARY KEY,
    userName VARCHAR(64),
    userPassword  VARCHAR(64),
    isAdmin VARCHAR(64)
);
CREATE TABLE borrow(
    book_bid INT(12),
    user_bid INT(12),
    borrow_date VARCHAR(64),
    return_date VARCHAR(64),
    PRIMARY KEY (book_bid, user_bid),
	FOREIGN KEY (book_bid) REFERENCES dd_book(bid),
	FOREIGN KEY (user_bid) REFERENCES user_info(bid)
);

#添加一本书籍的信息  x3
INSERT INTO dd_book VALUES(
    1,
    'python',
    35.5,
    '2015-11-27',
    true
);
INSERT INTO dd_book VALUES(
    2,
    'C++',
    70.8,
    '2011-1-10',
    false
);
INSERT INTO dd_book VALUES(
    3,
    'js',
    60.8,
    '2014-09-15',
    true
);


#添加用户和管理员的信息  x3
INSERT INTO user_info VALUES(
    10000,
    'liu',
    'a123',
    'false'
);
INSERT INTO user_info VALUES(
    10001,
    'wang',
    'asd123',
    'false'
);
INSERT INTO user_info VALUES(
    10002,
    'zhang',
    '123456',
    'true'
);


#添加用户借书的信息
INSERT INTO borrow VALUES(
    1,
    10001,
    '2011-1-10',
    '2011-3-15'
);
INSERT INTO borrow VALUES(
    2,
    10000,
    '2012-1-10',
    '2012-3-16'
);
INSERT INTO borrow VALUES(
    3,
    10001,
    '2013-2-10',
    '2013-3-15'
);

