<?php

/**
 * @copyright  Copyright (c) Flipbox Digital Limited
 * @license    https://github.com/flipboxfactory/craft-assets-circle-icon/blob/master/LICENSE
 * @link       https://github.com/flipboxfactory/craft-assets-circle-icon
 */

namespace flipbox\craft\assets\circleicon;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author Flipbox Factory <hello@flipboxfactory.com>
 * @since 1.0.0
 */
class CircleIcon extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/dist';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css = [
            'CircleIcon.css'
        ];

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public $depends = [
        CpAsset::class,
    ];
}
