<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="/old/css/site.css">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php /*
    NavBar::begin([
            'brandLabel' => 'RandomTube',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'nav navbar-fixed-top navbar-inverse',
            ],
        ]);
        $menuItems = [
            ['label' => 'Add Video', 'url' => ['/site/add']],
            ['label' => 'Add Video', 'url' => ['/site/add']],
            ['label' => 'Add Video', 'url' => ['/site/add']],
        ];

        echo Nav::widget([
            'options' => ['class' => ' nav navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        */ ?>

    <div class="container">
        <a href="<?= Yii::$app->homeUrl ?>" class="pull-left"><h4>RandomTube</h4></a>
        <a href="<?= Url::toRoute('/site/add'); ?>" class="btn pull-right"><h4>Добавить видео</h4></a>
    </div>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/old/js/custom.js"></script>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
