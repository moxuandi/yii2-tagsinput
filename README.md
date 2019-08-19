# yii2-tagsinput
Yii2 标签云插件

[Bootstrap Tags Input](http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/)

安装:
------------
使用 [composer](http://getcomposer.org/download/) 下载:
```
# 1.x(yii >= 2.0.24):
composer require moxuandi/yii2-tagsinput:"~1.0"

# 开发版:
composer require moxuandi/yii2-tagsinput:"dev-master"
```


使用:
-----
在`View`中添加:
```php
1. 简单调用:
$form->field($model, 'tags')->widget(moxuandi\tagsinput\TagsinputWidget, [
    'clientOptions' => [
        'trimValue' => true,
    ],
])

2. 不带 $model 调用:
\moxuandi\tagsinput\TagsinputWidget::widget([
    'name' => 'tags',
    'clientOptions' => [
        'trimValue' => true,
    ],
]);
```
