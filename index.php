<?php

# phpQueryを読み込む
require_once("./phpQuery-onefile.php");

# 日付パラメーター
$from = date("Y/m/d"); //今日
$to = date("Y/m/d", strtotime("6 month")); //6ヶ月加算

# 取得したいwebサイトを読み込む
$html = file_get_contents("https://connpass.com/search/?q=laravel&start_from=".$from."&start_to=".$to);

# DOM取得
$doc = phpQuery::newDocument($html);

# 要素取得
//echo $doc[".year:eq(0)"]->text()."年 ". $doc[".date:eq(0)"]->text();
//echo $doc[".event_title:eq(0)"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webスクレイピング　デモ</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!--自作CSS -->
    <style type="text/css">
        <!--
        /*ここに調整CSS記述*/

        -->
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-light navbar-dark bg-dark">
    <a class="navbar-brand" href="#!">Webスクレイピング　デモ</a>
</nav>

<!-- Page Content -->
<div class="container mt-5 text-center p-lg-5 bg-light">
    <h2 class="mb-5">Laravelの勉強会（by connpass）</h2>
    <!--Bootstrapコンポーネントを記述していく-->
    <dl class="row" style="text-align: left;">

        <?php if($doc[".year:eq(0)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(0)"]->text()."年 ". $doc[".date:eq(0)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(0)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(0)"]; ?>人)</dd>
        <?php }else{ ?>
            <dd class="col-sm-12" style="text-align: center;">現在、Laravelの勉強会はありません。</dd>
        <?php } ?>

        <?php if($doc[".year:eq(1)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(1)"]->text()."年 ". $doc[".date:eq(1)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(1)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(1)"]; ?>人)</dd>
        <?php } ?>

        <?php if($doc[".year:eq(2)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(2)"]->text()."年 ". $doc[".date:eq(2)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(2)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(2)"]; ?>人)</dd>
        <?php } ?>

        <?php if($doc[".year:eq(3)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(3)"]->text()."年 ". $doc[".date:eq(3)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(3)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(3)"]; ?>人)</dd>
        <?php } ?>

        <?php if($doc[".year:eq(4)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(4)"]->text()."年 ". $doc[".date:eq(4)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(4)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(4)"]; ?>人)</dd>
        <?php } ?>

        <?php if($doc[".year:eq(5)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(5)"]->text()."年 ". $doc[".date:eq(5)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(5)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(5)"]; ?>人)</dd>
        <?php } ?>

        <?php if($doc[".year:eq(6)"]->text()){ ?>
            <dt class="col-sm-3"><?php echo $doc[".year:eq(6)"]->text()."年 ". $doc[".date:eq(6)"]->text(); ?></dt>
            <dd class="col-sm-9"><?php echo $doc[".url:eq(6)"]; ?>　(参加者数：<?php echo $doc[".amount:eq(6)"]; ?>人)</dd>
        <?php } ?>
    </dl>

</div><!-- /container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script>
    // aタグ全てにターゲット _blank を設定
    $('a').attr('target' , '_blank');
</script>
</body>
</html>