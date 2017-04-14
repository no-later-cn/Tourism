DROP TABLE IF EXISTS scenery;
CREATE TABLE scenery
(
   id INT(12) PRIMARY KEY AUTO_INCREMENT,
   type_id INT(12),
   name VARCHAR(255),
   title VARCHAR(255),
   subtitle VARCHAR(255),
   gan VARCHAR(255),
   pic VARCHAR(255),
   des LONGTEXT,
   price VARCHAR(255),
   time VARCHAR(255),
   venue VARCHAR(255)
)DEFAULT CHARSET=utf8;

INSERT INTO
scenery(id,type_id,name,title,subtitle,gan,pic,des,price,time,venue)
VALUES
(1,1,"苏黎世","","BEAUTY OF ZURICH","/Static/Imgs/indeximgs/sulishi.png","/Static/Imgs/indeximgs/sulishi.png,/Static/Imgs/indeximgs/sulishi.png,/Static/Imgs/indeximgs/sulishi.png",".....","2305","11.10,11.12,11.13","北京,上海"),
(2,2,"威尼斯","感受北方威尼斯之美","BEAUTY OF VINICE","/Static/Imgs/indeximgs/jd1.png","/Static/Imgs/indeximgs/heatPlay-details-1.png,/Static/Imgs/indeximgs/heatPlay-details-2.png,/Static/Imgs/indeximgs/heatPlay-details-3.png","威尼斯(Vinice)是意大利东北部著名的旅游和工业城市，也是威尼托地区的首府。威尼斯曾经是威尼斯共和国的中心，被称作亚得里亚海明珠，十字军进行十字军东征时也曾在这里集结而且也是13世纪至17世纪末一个非常重要的商业艺术重镇，堪称世界最浪漫的城市之一。","5888","11.10,11.12,11.13","北京,上海"),
(3,3,"重庆","味蕾之都的冰火双体验","THE TASTE BUDS ARE DOUBLE EXPERIENCE","/Static/Imgs/indeximgs/gl1.png","/Static/Imgs/indeximgs/gl1.png,/Static/Imgs/indeximgs/gl1.png,/Static/Imgs/indeximgs/gl1.png","山城重庆，有着麻的顺辣的爽的火锅美食和景点都在吸引着你。","2435","6.10,6.12,6.13","北京,上海");

DROP TABLE IF EXISTS scenery_extra;
CREATE TABLE scenery_extra
(
  id INT(12) PRIMARY KEY AUTO_INCREMENT,
  scenery_id INT(12),
  type_id INT(12),
  look_num INT(12),
  like_num INT(12),
  collect_num INT(12),
  share_num INT(12),
  comment_num INT(12)
)DEFAULT CHARSET=utf8;

INSERT INTO
scenery_extra(id,scenery_id,type_id,look_num,like_num,collect_num,share_num,comment_num)
VALUES
(1,1,1,0,0,0,0,0),
(2,2,2,0,0,0,0,0),
(3,3,3,0,0,0,0,0);

DROP TABLE IF EXISTS tag;
CREATE TABLE tag
(
id INT(12) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255)
)DEFAULT CHARSET=utf8;

INSERT INTO
tag(id,name)
VALUES
(1,'一价全含'),
(2,'往返直飞'),
(3,'船游维港');


DROP TABLE IF EXISTS type;
CREATE TABLE type
(
  id INT(12) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255)
)DEFAULT CHARSET=utf8;

INSERT INTO
type(id,name)
VALUES
(1,'当季热玩'),
(2,'热门景点'),
(3,'旅游攻略');