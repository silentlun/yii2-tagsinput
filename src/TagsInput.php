<?php
/**
 * TagsInput renders a Tags input.
 * @author: silentlun
 * @date  2021年3月24日下午4:32:20
 * @copyright  Copyright igkcms
 */
namespace silentlun\tagsinput;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class TagsInput extends InputWidget
{
    /**
     * @var string the size of the input ('lg', 'md', 'sm', 'xs')
     */
    public $size;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        if ($this->size) {
            Html::addCssClass($this->options, 'form-control-' . $this->size);
        }
        Html::addCssClass($this->options, 'form-control');
        $this->options['data-role'] = 'tagsinput';
    }
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        
        $input = $this->hasModel()
        ? Html::activeTextInput($this->model, $this->attribute, $this->options)
        : Html::textInput($this->name, $this->value, $this->options);

        echo $input;
    }

}