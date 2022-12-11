/*NAME: AARSH PARIMAL PATEl
STUDENT ID: 200520260
MAIN-PROJECT*/


/*creating table to store our registered users*/
CREATE TABLE admin_record (
  id int not null primary key auto_increment,
  fullname varchar(255),
  email varchar(255),
  phonenum varchar(10),
  username varchar(255),
  pass_word varchar(255)
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

/*creating table to store our post data*/
CREATE TABLE post_record (
  post_id int not null primary key auto_increment,
  title varchar(255),
  author varchar(255),
  content varchar(5000)
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
/* end of the code*/
