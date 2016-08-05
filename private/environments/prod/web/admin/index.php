<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../../private/vendor/autoload.php');
require(__DIR__ . '/../../private/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../private/common/config/bootstrap.php');
require(__DIR__ . '/../../private/backend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../private/common/config/main.php'),
    require(__DIR__ . '/../../private/common/config/main-local.php'),
    require(__DIR__ . '/../../private/backend/config/main.php'),
    require(__DIR__ . '/../../private/backend/config/main-local.php')
);

(new yii\web\Application($config))->run();
