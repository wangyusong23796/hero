<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入

require BASEPATH.'../vendor/autoload.php';

// 载入数据库配置文件

require_once APPPATH.'../config/database.php';

//切换视图引擎.
\duncan3dc\Helpers\Env::usePath(VIEWPATH);

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection($db['eloquent']);

$capsule->bootEloquent();