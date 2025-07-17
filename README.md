# Yii2 的 TagsInput 小部件

yii2-tagsinput 是 bootstrap-tagsinput 的 Yii2 扩展包，用于管理标签的用户界面。

## 安装
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist silentlun/yii2-tagsinput "*"
```

or add

```
"silentlun/yii2-tagsinput": "*"
```

to the require section of your `composer.json` file.


## 使用
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
use silentlun\tagsinput\TagsInput;
?>

<?= $form->field($model, 'tags')->widget(TagsInput::class) ?>

```