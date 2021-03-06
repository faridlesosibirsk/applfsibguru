<?php

// test: Make sure this file is not accessible when deployed to production
// localhost => site.com
//if (!in_array(@$_SERVER['REMOTE_ADDR'], ['localhost', '::1'])) {
//    die('You are not allowed to access this file.');
//}

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
define('YII_ENABLE_ERROR_HANDLER', true);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../../administrator/config/web.php';

(new yii\web\Application($config))->run();
