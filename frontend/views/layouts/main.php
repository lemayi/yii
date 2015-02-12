<?php
use yii\helpers\Html;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link href="/css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php $this->beginBody() ?>

    <?= $this->render('header') ?>

    <?= $content ?>

    <?= $this->render('footer') ?>
    
    <?php $this->beginBody() ?>
</body>
</html>
<?php $this->endPage() ?>