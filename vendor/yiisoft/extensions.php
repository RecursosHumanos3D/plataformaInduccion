<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-bootstrap' => 
  array (
    'name' => 'yiisoft/yii2-bootstrap',
    'version' => '2.0.6.0',
    'alias' => 
    array (
      '@yii/bootstrap' => $vendorDir . '/yiisoft/yii2-bootstrap',
    ),
  ),
  'yiisoft/yii2-gii' => 
  array (
    'name' => 'yiisoft/yii2-gii',
    'version' => '2.0.5.0',
    'alias' => 
    array (
      '@yii/gii' => $vendorDir . '/yiisoft/yii2-gii',
    ),
  ),
  'yiisoft/yii2-faker' => 
  array (
    'name' => 'yiisoft/yii2-faker',
    'version' => '2.0.3.0',
    'alias' => 
    array (
      '@yii/faker' => $vendorDir . '/yiisoft/yii2-faker',
    ),
  ),
  'yiisoft/yii2-httpclient' => 
  array (
    'name' => 'yiisoft/yii2-httpclient',
    'version' => '2.0.4.0',
    'alias' => 
    array (
      '@yii/httpclient' => $vendorDir . '/yiisoft/yii2-httpclient',
    ),
  ),
  'yiisoft/yii2-authclient' => 
  array (
    'name' => 'yiisoft/yii2-authclient',
    'version' => '2.1.3.0',
    'alias' => 
    array (
      '@yii/authclient' => $vendorDir . '/yiisoft/yii2-authclient',
    ),
  ),
  'dektrium/yii2-user' => 
  array (
    'name' => 'dektrium/yii2-user',
    'version' => '9999999-dev',
    'alias' => 
    array (
      '@dektrium/user' => $vendorDir . '/dektrium/yii2-user',
    ),
    'bootstrap' => 'dektrium\\user\\Bootstrap',
  ),
  'kartik-v/yii2-krajee-base' => 
  array (
    'name' => 'kartik-v/yii2-krajee-base',
    'version' => '1.8.8.0',
    'alias' => 
    array (
      '@kartik/base' => $vendorDir . '/kartik-v/yii2-krajee-base',
    ),
  ),
  'dektrium/yii2-rbac' => 
  array (
    'name' => 'dektrium/yii2-rbac',
    'version' => '1.0.0.0-alpha',
    'alias' => 
    array (
      '@dektrium/rbac' => $vendorDir . '/dektrium/yii2-rbac',
    ),
    'bootstrap' => 'dektrium\\rbac\\Bootstrap',
  ),
  'yiisoft/yii2-swiftmailer' => 
  array (
    'name' => 'yiisoft/yii2-swiftmailer',
    'version' => '2.0.7.0',
    'alias' => 
    array (
      '@yii/swiftmailer' => $vendorDir . '/yiisoft/yii2-swiftmailer',
    ),
  ),
  'yiisoft/yii2-debug' => 
  array (
    'name' => 'yiisoft/yii2-debug',
    'version' => '2.0.9.0',
    'alias' => 
    array (
      '@yii/debug' => $vendorDir . '/yiisoft/yii2-debug',
    ),
  ),
  'kartik-v/yii2-widget-select2' => 
  array (
    'name' => 'kartik-v/yii2-widget-select2',
    'version' => '2.1.0.0',
    'alias' => 
    array (
      '@kartik/select2' => $vendorDir . '/kartik-v/yii2-widget-select2',
    ),
  ),
);
