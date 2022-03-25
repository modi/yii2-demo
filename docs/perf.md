# 性能相关

## 分批获取数据库查询结果，节约内存占用

准备数据：

    docker-compose up -d mysql,fpm
    docker-compose exec -T mysql mysql -u root -proot < common/misc/populate-table.sql

开启结果集缓冲：

    php yii db/batch-buffered

关闭结果集缓冲：

    php yii db/batch-unbuffered
