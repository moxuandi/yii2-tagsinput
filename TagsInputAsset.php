<?php
namespace moxuandi\tagsInput;

use yii\web\AssetBundle;

/**
 * Asset bundle for the tagsinput Widget
 *
 * @author zhangmoxuan <1104984259@qq.com>
 * @link http://www.zhangmoxuan.com
 * @QQ 1104984259
 * @Date 2019-8-21
 * @see https://github.com/bootstrap-tagsinput/bootstrap-tagsinput
 * @see http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/
 */
class TagsInputAsset extends AssetBundle
{
    public $sourcePath = '@vendor/moxuandi/yii2-tagsinput/assets';
    public $css = [
        'dist/bootstrap-tagsinput.css',
    ];
    public $js = [
        'dist/bootstrap-tagsinput.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
