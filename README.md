
yii2-datadict
===========
字段管理控件扩展

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require abiao/yii2-datadict:dev-master
```

or add

```
"abiao/yii2-datadict": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
    # 调用添加字段
    /datadict/datadict/index
    # 调用添加字段说明
    /datadict/datadict-detail/index
     # 调用获取所有字段取值接口
     $datadictlist = Yii::$app->Datadict->getAll();


```

配置说明
--------

请在配置文件加入模块，以调用字段管理controller
```php
    ...
        'Datadict' => [
            'class' => 'abiao\datadict\Module',
        ],
    ...
  ```  
请在配置文件加入组件配置，以调用字段管理Component
```php
    ...
     'Datadict' => [
            'class' => 'abiao\datadict\DatadictComponent',
        ],
    ...
...
       


数据迁移
------
如果数据库不存在存储搜索条件的数据表结构，请执行下面的数据迁移命令：
```php
yii migrate --migrationPath=@vendor/abiao/yii2-datadict/migrations
```

其他说明
------
注意控件接口有多个
```php
    ...获取所有字段
        $datadictlist = Yii::$app->Datadict->getAll();
    ...根据id获取字段
        $datadictlist = Yii::$app->Datadict->getDataDict($id);
```

