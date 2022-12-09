CREATE TABLE admin_record (
  id int not null primary key auto_increment,
  fullname varchar(255),
  email varchar(255),
  phonenum varchar(10),
  username varchar(255),
  pass_word varchar(255)
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
