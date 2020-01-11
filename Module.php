<?php

namespace elephantsGroup\slideshow;

/*
	Yii2 wrapper for some javascript slideshow libraries 
	Authors : Jalal Jaberi, Arezou Zahedi Majd
	Website : http://elephantsgroup.com
	Revision date : 2020/01/11
*/

use Yii;

class Module extends \yii\base\Module
{
    public $type = 'slider'; // slider or carousel 
    public $startAt = 0;
    public $perView = 3;
    public $focusAt = 0;
    public $gap = 10;
    public $autoplay = 3000;
    public $hoverPause = true;
    public $keyboard = false;
    public $bound = false;
    public $swipThreshold = 80;
    public $dragThreshold = 120;
    public $perTouch = false;
    public $touchRatio = 0.5;
    public $touchAngle = 45;
    public $animationDuration = 400;
    public $rewind = true;
    public $rewindDuration = 800;
    public $animationTimingFunc = 'cubic-bezier(0.165, 0.840, 0.440, 1.000)';
    public $direction = 'rtl';
    public $peek = 0;
    public $breakPoints = '{}';
    public $classes = '{}';
    public $throttle = 25;

    public function init()
    {
        parent::init();

        if (empty(Yii::$app->i18n->translations['slideshow']))
		{
            Yii::$app->i18n->translations['slideshow'] =
			[
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => __DIR__ . '/messages',
                //'forceTranslation' => true,
            ];
        }
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return \Yii::t($category, $message, $params, $language);
    }
}
