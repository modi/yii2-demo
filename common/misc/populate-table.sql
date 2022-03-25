USE app;

DROP TABLE IF EXISTS t1;

CREATE TABLE t1 (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    c1 TEXT
);

DELIMITER $
DROP PROCEDURE IF EXISTS populate_table;
CREATE PROCEDURE populate_table()
BEGIN
    DECLARE i INT;
    DECLARE str VARCHAR(100);

    SET i = 0;
    set str = RPAD('', 100, '?');

    WHILE i < 10000 DO
        INSERT INTO t1 (c1) VALUES (str);
        SET i = i + 1;
    END WHILE;
END$
DELIMITER ;

CALL populate_table();
