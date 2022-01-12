CREATE DATABASE IF NOT EXISTS `app`;

CREATE USER 'app_user'@'%' IDENTIFIED BY 'app_pass';

GRANT ALL ON `app`.* TO 'app_user'@'%';
