<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?=$actTitle?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">

        <link rel="stylesheet" href="css/styles.css?v=25">
    </head>
    <body>
        <div id="topline">
            <?php
                include('topline.php');
            ?>
            <!-- <div id="quart">
                <span id="logo">
                    Sell
                </span>
                <span id="logo1">
                    AIR
                </span>
            </div> -->
        </div>
        <div id="slider">
            <?php
                include('slidebar.php');
            ?>
            <div id="slidenavig">
                <span class="slider-nav-item slider-nav-item-bg ">Item 1</span>
                <span class="slider-nav-item slider-nav-item-bg">Item 2</span>
                <span class="slider-nav-item slider-nav-item-bg">Item 3</span>
                <span class="slider-nav-item slider-nav-item-bg">Item 4</span>
                <span class="slider-nav-item slider-nav-item-bg">Item 5</span>
                <span class="slider-nav-item ">Item 6</span>

            </div>
        </div>
        <div id="wrapper">
            <div class="content">
                <div class="conthead">
                    <h1><?=$contentTitle?></h1>
                </div>
            </div>
                <?php
                    if($error){
                        echo "<p style='padding:25px; font-size:24px; color:red;'>".$error."</p>";
                    }else{
                        include($tmpFile);
                    }
                ?>
            <div class="content" style="min-height:300px;">
                <div class="conthead">
                    <h2>Топ новинки</h2>
                </div>

                <div id="newitems">


                    <?php
                        foreach($allItems as $item){
                            $descr = mb_substr($item['itemDescription'], 0, 30);
                            echo <<<HTML
                            <div class="newitem">
                                <a href="/?action=item&id={$item['id']} ">
                                    <div class="item-img">
                                        <center>
                                            <img src="images/userImage/{$item['itemMainImg']}" alt="">
                                        </center>
                                    </div>
                                </a>
                                <style media="screen">
                                    .glyph a{
                                        float: right;
                                        font-size:16px;
                                        left:-20px;
                                        padding:5px;
                                        display:block;
                                        border-radius:3px;
                                        color:black;
                                    }
                                    .glyph a:hover{
                                        color:orange;
                                        background-color:#cecece;
                                    }
                                </style>
                                    <div class="item-info">
                                        <div class="item-name">
                                            <div class="itemname-bg">
                                                <a href="/?action=item&id={$item['id']}" >
                                                    <span class="itmnamebg-title">{$item['itemName']}</span>
                                                </a>
                                                <div class="glyph">
                                                    <a href="http://sellair/admin.php?action=editItems&id={$item['id']}" target="_blank">
                                                        <span class="glyphicon glyphicon-edit"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemtext-cont">
                                            <span class="item-text">
                                                {$descr} . . .
                                            </span>
                                        </div>
                                        <div class="itemtext-cont">
                                            <span class="item-text">
                                                <b>Производитель: </b>{$item['itemManufacture']}
                                            </span>
                                        </div>
                                    </div>
                                    <style>
                                        .price{
                                            /* outline:1px solid red; */
                                            float:left;
                                            position:relative;
                                            top:5px;
                                            width:100px;
                                            background-color:rgb(249, 195, 200);
                                            text-align:center;
                                            font-size:18px;
                                            color:black;
                                            border-radius:10px;
                                        }
                                    </style>
                                    <div class="price">{$item['itemCost']}</div>
                            </div>
HTML;
                        }

                    ?>






            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
