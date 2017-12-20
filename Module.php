<?php
/**
 * @link http://www.anlewo.com/
 * @copyright Copyright (c) 2015-2017 Anlewo Ltd
 * @license 广东安乐窝网络科技有限公司
 * @author CaiBiao Shen <shencaibiao@anlewo.com>
 * @date 2017/11/10
 */

namespace anlewo\datadict;

/**
 * datadict module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'anlewo\datadict\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
