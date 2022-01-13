# Yii2 示例项目

## 创建项目

执行：

    composer create-project modi/yii2-starter

## 安装依赖、初始化

安装 PHP 依赖：`composer install`

安装前端依赖：`yarn install`

执行 Yii2 初始化脚本：`php init`

## 安装 Redis

略。

## 添加 Yii2 Redis 组件

1）添加依赖

执行：`composer require "yiisoft/yii2-redis:~2.0.0"`

2）添加配置

在 `common/config/main.php` 里添加组件配置：

    return [
        // ...
        'components' => [
            'redis' => [
                'class' => 'yii\redis\Connection',
                'hostname' => 'redis', // Redis 服务地址
                'port' => 6379,
                'database' => 0,
                'password' => 'NOT_SAFE',
            ],
        ],
    ];
