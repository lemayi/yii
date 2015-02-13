<?php
use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php if(!empty($this->cssFiles) && is_array($this->cssFiles)): ?>
        <?php foreach($this->cssFiles as $css): ?>
            <link href="/css/<?= $css ?>" type="text/css" rel="stylesheet">
        <?php endforeach ?>
    <?php endif ?>
</head>
<body>
    <?= $this->render('header') ?>

    <?= $content ?>

    <?= $this->render('footer') ?>
</body>
</html>