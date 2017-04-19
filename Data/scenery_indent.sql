DROP TABLE IF EXISTS scenery_indent;
CREATE TABLE scenery_indent
(
    id INT(12) PRIMARY KEY AUTO_INCREMENT,
    account_id INT(12),
    scenery_id INT(12),
    num INT(12),
    create_time VARCHAR(255),
    is_pay INT(1)
)DEFAULT CHARSET=utf8;

INSERT INTO
scenery_indent(id,account_id,scenery_id,num,create_time,is_pay)
VALUES
(1,1,1,1,1492150685600,1);
