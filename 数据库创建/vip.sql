SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 表的结构 message
--
drop TABLE IF EXISTS message;
CREATE TABLE IF NOT EXISTS message (
  id int(11) NOT NULL AUTO_INCREMENT,
  to_id int(11) NOT NULL,
  title varchar(50) NOT NULL,
  content text NOT NULL,
  createtime varchar(50) NOT NULL,
  from_id varchar(50) NOT NULL,
PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- 表的结构 tb_message
--
drop TABLE IF EXISTS tb_message;
CREATE TABLE IF NOT EXISTS tb_message (
  id int(4) NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  content text NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(10) DEFAULT NULL,
  time varchar(50) NOT NULL,
PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- 售票人员信息
/*售票人员信息*/
drop TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  yd_id int(10) NOT NULL , # id
  yd_name varchar(10) NOT NULL,  # 姓名
  yd_pws varchar(32) NOT NULL,  # 口令密码
  yd_sex varchar(4) NOT NULL,  # 性别
  yd_age varchar(4) NOT NULL,  # 年龄
  yd_call varchar(15) NOT NULL,  # 电话
  yd_email varchar(20) NOT NULL,  # 电子邮箱
  yd_address text NOT NULL,  # 家庭住址
  yd_pass varchar(20) NOT NULL, # 是否审核
  yd_time date NOT NULL,  # 创建时间
  life_cityorhamlet varchar(200) DEFAULT NULL,  # 生活过的地方
  PRIMARY KEY (yd_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;


-- 票种信息
/*票种信息*/
drop TABLE IF EXISTS ticket_kind;
CREATE TABLE IF NOT EXISTS ticket_kind (
  name varchar(50) not null, # 名称
  price decimal(10,2) not null default 1.00, # 单价
  remark varchar(200) default null, # 备注 
  PRIMARY KEY (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 期间信息
/*期间信息*/
drop TABLE IF EXISTS period;
CREATE TABLE IF NOT EXISTS period (
  name varchar(50) not null, # 名称
  discount decimal(10,4) not null default 100.0000, # 折扣百分比
  remark varchar(200) default null, # 备注
  PRIMARY KEY (name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 售票信息
/*售票信息*/
drop TABLE IF EXISTS sales_ticket;
CREATE TABLE IF NOT EXISTS  sales_ticket (
  id int(20) NOT NULL AUTO_INCREMENT , # ID 
  sales_time date NOT NULL, # 售票时间
  ticket_kind_name varchar(50) not null, # 售票种类
  ticket_kind_price decimal(10,2) not null default 1.00, # 售票单价
  sales_amount decimal(10) not null default 1, # 售票张数
  period_name varchar(50) not null, # 售票期间
  period_discount decimal(10,4) not null default 100.0000, # 折扣百分比
  receivable_money decimal(10,2) not null default 1.00, # 应收金额=sales_amount * ticket_kind_price * period_discount 
  received_money decimal(10,2) not null default 1.00, # 实收金额 >= receivable_money
  odd_change decimal(10,2) not null default 1.00, # 找零= receivable_money（实收金额） - receivable_money（应收金额）
  human varchar(50) not null, # 售票人
  remark varchar(200), # 备注 
  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- 生活过的城市
/*生活过的城市*/  
  drop TABLE IF EXISTS city;
  CREATE TABLE IF EXISTS city (
  id int(20) NOT NULL AUTO_INCREMENT,
  adress varchar(50) NOT NULL,
  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO city(id, adress) VALUES
(1, '西安'),
(2, '上海'),
(3, '北京'),
(4, '杭州'),
(5, '石家庄'),
(6, '天津'),
(7, '长沙'),
(8, '广州'),
(9, '深圳'),
(10, '成都'),
(11, '济南'),
(12, '福州'),
(13, '合肥'),
(14, '南京'),
(15, '重庆'),
(16, '乌鲁木齐'),
(17, '拉萨'),
(18, '哈尔滨'),
(19, '长春'),
(20, '沈阳');

  