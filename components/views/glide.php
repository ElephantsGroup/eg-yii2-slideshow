<?php
use elephantsGroup\slideshow\assets\GlideAsset;

GlideAsset::register($this);
$module_base = \Yii::$app->getModule('base');
$module_slideshow = \Yii::$app->getModule('slideshow');
?>

<div class="glide">
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
    </div>
    <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
    </div>
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
        <?php foreach ($images as $image):?>
            <li class="glide__slide">
                <img class="glide_image"
                    src="<?= $image['src'] ?>"
                    width="<?= $image['width'] ?>"
                    height="<?= $image['width'] ?>"
                    title="<?= $image['title'] ?>"
                    alt="<?= $image['alt'] ?>">
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php
$autoplayString = (is_bool($autoplay) ? ($autoplay ? 'true' : 'false') : $autoplay);
$hoverPauseString = ($hoverPause ? 'true' : 'false');
$keyboardString = ($keyboard ? 'true' : 'false');
$boundString = ($bound ? 'true' : 'false');
$perTouchString = ($perTouch ? 'true' : 'false');
$rewindString = ($rewind ? 'true' : 'false');
$glideCode = <<<EOD
new Glide('.glide', {
    type: '$type',
    startAt: $startAt,
    perView: $perView,
    focusAt: $focusAt,
    gap: $gap,
    autoplay: $autoplayString,
    hoverPause: $hoverPauseString,
    keyboard: $keyboardString,
    bound: $boundString,
    swipThreshold: $swipThreshold,
    dragThreshold: $dragThreshold,
    perTouch: $perTouchString,
    touchRatio: $touchRatio,
    touchAngle: $touchAngle,
    animationDuration: $animationDuration,
    rewind: $rewindString,
    rewindDuration: $rewindDuration,
    animationTimingFunc: '$animationTimingFunc',
    direction: '$direction',
    peek: $peek,
    breakPoints: $breakPoints,
    classes: $classes,
    throttle: $throttle,
}).mount();\n
EOD;

$this->registerJs($glideCode, \yii\web\View::POS_END);
?>