-- 车详情
DROP TABLE IF EXISTS car;
-- 车id 车列表略所图 车距离 车牌号 车型标题 车型英文 车型描述 车的banner图1 车的banner图2 车的banner图3  车价格 取车地点 使用天数 租用日期 公司图
CREATE TABLE car(
  `id` INT(12) PRIMARY KEY AUTO_INCREMENT,
  `d_map` VARCHAR (255),
  `ran` VARCHAR (255),
  `car_num` VARCHAR (255),
  `d_title` VARCHAR (255),
  `e_title` VARCHAR (255),
  `d_decs` VARCHAR (255),
  `b_o` VARCHAR (255),
  `b_t` VARCHAR (255),
  `b_f` VARCHAR (255),
  `price` VARCHAR (255),
  `place` VARCHAR (255),
  `duration` INT(12),
  `statr_time` VARCHAR (255),
  `company` VARCHAR (255)
)DEFAULT CHARSET=UTF8;
-- 车id 车列表略所图 车距离 车牌号 车型标题 车型英文 车型描述 车的banner图1 车的banner图2 车的banner图3  车价格 取车地点 使用天数 租用日期 公司图

INSERT INTO car(id,d_map,ran,car_num,d_title,e_title,d_decs,b_o,b_t,b_f,price,place,duration,statr_time,company) VALUES
(1,'/Static/Imgs/cart/cart-1.png','230','晋A85CC6','别克凯越','Buick Excelle','凯越(Buick Excelle)基于通用汽车全球平台。它的外形出自全球三大汽车设计公司之一，拥有73年设计史的意大利pininfarina。用亲自领衔造型设计的首席执行官自己的话来讲：就是要打造一款“融入欧洲风格”的全球车。
2003年4月21日，上海通用汽车的全新中级车，被称为“中别克”的凯越上市。上海通用汽车隆重推出基于全新产品平台的“别克凯越Buick Excelle”，从而正式进军极具潜力的中级车市场。','/Static/Imgs/cart/c1-1.png','/Static/Imgs/cart/c1-2.png','/Static/Imgs/cart/c1-3.png','798','体育路店',5,' ','/Static/Imgs/cart/c_l_1.png'),
(2,'/Static/Imgs/cart/cart-2.png','480','晋C6363E','保时捷','Porsche','保时捷（Porsche)，又叫波尔舍，是欧美汽车的主要代表，也是闻名世界的汽车公司。1931年成立于斯图加特，以生产高级跑车闻名于世界车坛。创始人费迪南德·波尔舍（同费迪南德·保时捷）是一位享誉世界车坛的著名设计师。
保时捷汽车主要车型有911、Boxster、Cayman、Panamera、Cayenne、Macan。','/Static/Imgs/cart/c2-1.png','/Static/Imgs/cart/c2-2.png','/Static/Imgs/cart/c2-3.png','699','体育路店',3,' ','/Static/Imgs/cart/c_l_1.png'),
(3,'/Static/Imgs/cart/cart-3.png','630','晋A7879V','福特',' Ford Excelle','福特（Ford）是世界著名的汽车品牌，为美国福特汽车公司（Ford Motor Company）旗下的众多品牌之一，公司及品牌名“福特”来源于创始人亨利·福特（Henry Ford）的姓氏。福特汽车公司是世界上最大的汽车生产商之一，成立于1903年，旗下拥有福特（Ford）和林肯（Lincoln）汽车品牌，总部位于密歇根州 迪尔伯恩市（Dearborn）。除了制造汽车，公司还设有金融服务部门即福特信贷（Ford Credit），主要经营购车金融、车辆租赁和汽车保险方面的业务。','/Static/Imgs/cart/c3-1.png','/Static/Imgs/cart/c3-2.png','/Static/Imgs/cart/c3-3.png','599','平阳路店',3,' ','/Static/Imgs/cart/c_l_2.png'),
(4,'/Static/Imgs/cart/cart-4.png','820','晋B03RTY','新速腾','New Sagitar ','2016年9月19日，新速腾2017年型超值上市，配置更加丰富，售价保持不变，速箱速腾是7速双离合，新车型增加了诸多舒适、科技装备，比如真皮多功能方向盘、无钥匙进入与一键启动、后倒车雷达、后门氛围灯、第二代MIB信息娱乐系统等一系列科技装备。在除时尚型外的全系车型上实现了标配；同时此次年型升级提供了更个性化的选装方案，以十足诚意感恩消费者十年厚爱与支持。
速腾品牌自2006年引入中国市场以来，以其原汁原味的德系血统、精湛的制造工艺、同级领先的科技装备，和累计超过130万的销量，成为中国A+级轿车的市场标杆。','/Static/Imgs/cart/c4-1.png','/Static/Imgs/cart/c4-2.png','/Static/Imgs/cart/c4-3.png','399','平阳路店',1,' ','/Static/Imgs/cart/c_l_2.png'),
(5,'/Static/Imgs/cart/cart-5.png','940','晋K555QL','全新宝来','ALL NEW BORA','ALL NEW BORA全新宝来，基于中国消费者需求、专为中国市场开发。在传承大众家族式经典脸谱的基础上，以更加年轻、精致的设计语言，开启一汽-大众造型设计的全新篇章。“BORA”的历史可以追溯到1997年，当时以高档化为目标的大众集团，推出了与奥迪A3拥有大量共用部件的BORA，它是大众品牌旗下的全尺寸轿车，A级平台的创新杰作，是国际领先的产品，是现代轿车性能和品质的领导者。2000年，BORA在美国销售了14.5万辆，战胜了宝马3系列、奔驰C级车等众多车型，成为年度最受欢迎的欧洲进口车。同期，Bora在中国香港被评为“市民买得起的好车”。','/Static/Imgs/cart/c5-1.png','/Static/Imgs/cart/c5-2.png','/Static/Imgs/cart/c5-3.png','399','建设南路店',5,' ','/Static/Imgs/cart/c_l_3.png'),
(6,'/Static/Imgs/cart/cart-6.png','1020','晋JP8P8P','雪弗兰','Chevrolet','雪佛兰（Chevrolet）是美国通用汽车公司（General Motors，简称GM）旗下的一个汽车品牌，1911年11月3日创立，创始人为威廉·杜兰特（William C. Durant）和路易斯·雪佛兰（Louis Chevrolet）。雪佛兰也被称为Chevy，1918年被通用汽车并购，现在为通用汽车旗下最为国际化和大众化的品牌。雪佛兰的车型品种非常广泛，从小型轿车到大型4门轿车，从厢式车到大型皮卡，甚至从越野车到跑车，雪佛兰几乎生产消费者所需要的任何一种车型。','/Static/Imgs/cart/c6-1.png','/Static/Imgs/cart/c6-2.png','/Static/Imgs/cart/c6-3.png','599','建设南路店',5,' ','/Static/Imgs/cart/c_l_3.png');