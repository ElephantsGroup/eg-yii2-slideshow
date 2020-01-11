<?php

namespace elephantsGroup\slideshow\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Glide extends Widget
{
	public $language;
	public $view_file = 'glide';
	public $images;
    public $type;
    public $startAt;
    public $perView;
    public $focusAt;
    public $gap;
    public $autoplay;
    public $hoverPause;
    public $keyboard;
    public $bound;
    public $swipThreshold;
    public $dragThreshold;
    public $perTouch;
    public $touchRatio;
    public $touchAngle;
    public $animationDuration;
    public $rewind;
    public $rewindDuration;
    public $animationTimingFunc;
    public $direction;
    public $peek;
    public $breakPoints;
    public $classes;
    public $throttle;

	public function init()
	{
		$module = Yii::$app->getModule('slideshow');

		if (!isset($this->language) || !$this->language)
			$this->language = Yii::$app->language;

		if (!isset($this->type) || !$this->type)
			$this->type = $module->type;

		if (!isset($this->startAt) || !$this->startAt)
			$this->startAt = $module->startAt;

		if (!isset($this->perView) || !$this->perView)
			$this->perView = $module->perView;

		if (!isset($this->focusAt) || !$this->focusAt)
			$this->focusAt = $module->focusAt;

		if (!isset($this->gap) || !$this->gap)
			$this->gap = $module->gap;

		if (!isset($this->autoplay) || !$this->autoplay)
			$this->autoplay = $module->autoplay;

		if (!isset($this->hoverPause) || !$this->hoverPause)
			$this->hoverPause = $module->hoverPause;

		if (!isset($this->keyboard) || !$this->keyboard)
			$this->keyboard= $module->keyboard;

		if (!isset($this->bound) || !$this->bound)
			$this->bound = $module->bound;

		if (!isset($this->swipThreshold) || !$this->swipThreshold)
			$this->swipThreshold= $module->swipThreshold;

		if (!isset($this->dragThreshold) || !$this->dragThreshold)
			$this->dragThreshold = $module->dragThreshold;

		if (!isset($this->perTouch) || !$this->perTouch)
			$this->perTouch= $module->perTouch;

		if (!isset($this->touchRatio) || !$this->touchRatio)
			$this->touchRatio = $module->touchRatio;

		if (!isset($this->touchAngle) || !$this->touchAngle)
			$this->touchAngle= $module->touchAngle;

		if (!isset($this->animationDuration) || !$this->animationDuration)
			$this->animationDuration= $module->animationDuration;

		if (!isset($this->rewind) || !$this->rewind)
			$this->rewind = $module->rewind;

		if (!isset($this->rewindDuration) || !$this->rewindDuration)
			$this->rewindDuration = $module->rewindDuration;

		if (!isset($this->animationTimingFunc) || !$this->animationTimingFunc)
			$this->animationTimingFunc = $module->animationTimingFunc;

		if (!isset($this->direction) || !$this->direction)
			$this->direction = $module->direction;

		if (!isset($this->peek) || !$this->peek)
			$this->peek = $module->peek;

		if (!isset($this->breakPoints) || !$this->breakPoints)
			$this->breakPoints = $module->breakPoints;

		if (!isset($this->classes) || !$this->classes)
			$this->classes = $module->classes;

		if (!isset($this->throttle) || !$this->throttle)
			$this->throttle = $module->throttle;
	}

    public function run()
	{
        return $this->render($this->view_file,[
			'images' => $this->images,
			'type' => $this->type,
			'startAt' => $this->startAt,
			'perView' => $this->perView,
			'focusAt' => $this->focusAt,
			'gap' => $this->gap,
			'autoplay' => $this->autoplay,
			'hoverPause' => $this->hoverPause,
			'keyboard' => $this->keyboard,
			'bound' => $this->bound,
			'swipThreshold' => $this->swipThreshold,
			'dragThreshold' => $this->dragThreshold,
			'perTouch' => $this->perTouch,
			'touchRatio' => $this->touchRatio,
			'touchAngle' => $this->touchAngle,
			'animationDuration' => $this->animationDuration,
			'rewind' => $this->rewind,
			'rewindDuration' => $this->rewindDuration,
			'animationTimingFunc' => $this->animationTimingFunc,
			'direction' => $this->direction,
			'peek' => $this->peek,
			'breakPoints' => $this->breakPoints,
			'classes' => $this->classes,
			'throttle' => $this->throttle,
		]);
	}
}