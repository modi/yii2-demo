USE app;

DROP TABLE IF EXISTS t1;

CREATE TABLE t_large (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    c1 VARCHAR(200)
);

DELIMITER $
DROP PROCEDURE IF EXISTS populate_table;
CREATE PROCEDURE populate_table()
BEGIN
    DECLARE i INT;
    DECLARE str VARCHAR(200);

    SET i = 0;
    set str = RPAD('', 200, '?');

    WHILE i < 100000 DO
        INSERT INTO t_large (c1) VALUES (str);
        SET i = i + 1;
    END WHILE;
END$
DELIMITER ;

CALL populate_table();
