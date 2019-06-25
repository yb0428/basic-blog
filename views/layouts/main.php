<?php

use \yii\helpers\Url;

?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页_个人博客 - 一个个人博客网站</title>
    <meta name="keywords" content="个人博客,个人博客,个人博客模板" />
    <meta name="description" content="个人博客，是一个程序员个人网站。" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/css/index.css" rel="stylesheet">

</head>
<body>

<header>
    <div class="logo"><a href="javascript:void(0);">个人博客</a></div>
    <nav>
        <ul id="starlist">
            <li><a href="/">博客日记</a></li>
            <li><a href="<?php echo Url::toRoute(['/index/aboutus']); ?>">关于我</a></li>
<!--            <li><a href="list.html">博客日记</a></li>-->
<!--            <li><a href="info.html">慢生活</a></li>-->
<!--            <li><a href="time.html">时间轴</a></li>-->

        </ul>
    </nav>
</header>


        <?= $content ?>


<footer class="footer">
    <p>Design by <a href="/" target="_blank">个人博客</a> </p>
    <p>备案号：<a href="/">粤ICP备11002373号-1</a></p>

</footer>


</body>
</html>
