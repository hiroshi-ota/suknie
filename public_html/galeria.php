<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/main.css">
        <link href="css/slimbox2.css" rel="stylesheet" type="text/css"/>

        <style>
            body {
                padding-top: 30px;
                padding-bottom: 20px;
            }
        </style>

        <!--        <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->    
        <script src="js/progressbar.js" type="text/javascript"></script>
        <script src="js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/slider/jquery.slides.min.js" type="text/javascript"></script>
        <script src="js/vendor/bootstrap.js" type="text/javascript"></script>
        <script src="js/slimbox2.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>

        <?php
        $adres = htmlspecialchars($_GET["image"] . ".jpg");
        $txt = file(htmlspecialchars($_GET["image"]) . ".txt");
        ?>

        <div class="container">

            <h2 class="page-header" style="margin-top: 0"><?php echo $txt[0]; ?></h2>

            <div class="col-xs-6">
                <img class="img-rounded" src="<?php echo $adres ?>" alt="działa!" style="height: 700px">
            </div>

            <div class="col-xs-6">
                <p style="margin-bottom: 30px">
                    <?php
                    echo trim($txt[1]);
                    ?>
                </p>
                <div class="row" style="text-align: center">
                    <?php
                    $dirname = "images/klasyczna/";
                    $images = glob($dirname . "*.jpg");
                    echo '<p class:"page-header">Podobne propozycje: </p>';

                    foreach ($images as $image) {
                        if($image != $adres){
                        echo '<img src="' . $image . '" alt="obrazek" class="img-thumbnail" style="height:200px" />';
                        }
                    }
                    ?>
                </div>
            </div>


            <?php
//        $directory = "./images/klasyczna";
//        $dir = opendir($directory);
//
//        while ($file_name = readdir($dir)) {
//            if (($file_name != ".") && ($file_name != "..")) {
//                $img = 'images/klasyczna/' . $file_name;
//                echo '<img src="' . $img . '" alt="obrazek" class="img-thumbnail" style="height:200px" />';
//                echo ' ';
//            }
//        }
//
//        closedir($dir);
//        
            ?>

        </div>
    </body>
</html>

