<?php
return array(
	 /* 数据库设置 */
    'DB_TYPE'               =>  'pdo',     // 数据库类型
    'DB_DSN'    => 'mysql:host=localhost;dbname=php39;charset=utf8',
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'p39_',    // 数据库表前缀
    'DEFAULT_FILTER' => 'trim,htmlspecialchars',
);