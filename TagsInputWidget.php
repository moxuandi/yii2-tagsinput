<?php
namespace moxuandi\tagsInput;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

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
class TagsInputWidget extends InputWidget
{
    /**
     * @var array the bootstrap-tagsinput 插件的 JQuery 选项.
     * @see http://timschlechter.github.io/bootstrap-tagsinput/examples/#options
     */
    public $clientOptions = [];
    /**
     * @var array 输入标签的 HTML 属性.
     */
    public $options = [];


    public function run()
    {
        $this->registerClientScript();
        return $this->hasModel() ? Html::activeTextInput($this->model, $this->attribute, $this->options) : Html::textInput($this->name, $this->value, $this->options);
    }

    /**
     * 注册客户端脚本.
     */
    public function registerClientScript()
    {
        TagsInputAsset::register($this->view);
        $this->view->registerJs('$("#' . $this->options['id'] . '").tagsinput(' . Json::encode($this->clientOptions) . ');');
    }
}
