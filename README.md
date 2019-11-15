# yii2-tagsinput
Yii2 标签云插件

[Bootstrap Tags Input](http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/)

参考借鉴: [wbraganca/yii2-tagsinput](https://github.com/wbraganca/yii2-tagsinput)

安装:
------------
使用 [composer](http://getcomposer.org/download/) 下载:
```
# 2.2.x(yii >= 2.0.24):
composer require moxuandi/yii2-tagsinput:"~2.2.0"

# 开发版:
composer require moxuandi/yii2-tagsinput:"dev-master"
```


使用:
-----
在`View`中添加:
```php
1. 简单调用:
$form->field($model, 'tags')->widget(moxuandi\tagsInput\TagsInputWidget, [
    'clientOptions' => [
        'trimValue' => true,
    ],
])

2. 不带 $model 调用:
\moxuandi\tagsInput\TagsInputWidget::widget([
    'name' => 'tags',
    'clientOptions' => [
        'trimValue' => true,
    ],
]);
```
