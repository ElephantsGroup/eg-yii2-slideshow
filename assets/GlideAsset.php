<?php

namespace elephantsGroup\slideshow\assets;

use yii\web\AssetBundle;
use yii\web\View;

class GlideAsset extends AssetBundle
{
    public $sourcePath = '@vendor/elephantsgroup/eg-yii2-slideshow/assets';

    public function init() {
        $this->jsOptions['position'] = View::POS_END;
        parent::init();
    }

	public $css = [
        'css/glide/glide.core.min.css',
	];
    public $js = [
        'js/glide/glide.min.js',
	];
    public $depends = [
    ];
}
