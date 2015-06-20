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

        <div class="tlo"></div>

        <?php
        $imageTab = explode("/", htmlspecialchars($_GET["image"]));
        $imageName = $imageTab[2];
        $adres = htmlspecialchars($_GET["image"] . '.jpg');
        $local = htmlspecialchars($_GET["local"]);
        $txt = file(htmlspecialchars($_GET["image"]) . '.txt');
        $firefox = '';
        ?>

        <!--LOADING-->
        <div class = "loading-mask"></div>
        <div class = "progressbar" id = "progress"></div>

        <div class = "container">

            <h2 class="page-header" style="margin-top: 0"><?php echo $txt[0]; ?></h2>

            <div class="col-xs-6">
                <a href="<?php echo $adres ?>" title="Suknia <?php echo substr($local, strpos($local, "/") + 1) ?>" rel="lightbox" >
                    <img class="img-circle-main img-responsive img-shadow" src="<?php echo $adres ?>" alt="empire" />
                </a>
            </div>

            <div class="col-md-6 col-xs-12">
                <p style="margin-bottom: 50px">
                    <?php
                    echo trim($txt[1]);
                    ?>
                </p>
                <div class="row" style="text-align: center">
                    <?php
                    $dirname = $local;
                    $images = glob($dirname . "*.jpg");
                    $ilosc = 1;
                    $granica = 6;

                    foreach ($images as $image) {
                        
                        if((strpos($image, $imageName)) == TRUE && $image[strlen ($image)-1] == 's'){
                        
                            echo '<form action="galeria.php" method="get" target="_blank" style="width: 180px; display: inline-block">'
                            . '<button class="ff btn-link" type="submit">'
                            . '<img src="' . $image . '" class="img-thumbnail form-inline"/>'
                            . '<input name="local" hidden="true" type="text" value="' . $local . '"/>'
                            . '<input name="image" hidden="true" type="text" value="' . substr($image, 0, strpos($image, "_")) . '"/>'
                            . '</button>'
                            . '</form>';
                        }
                    }
                    echo '<p class:"page-header">Podobne propozycje: </p>';

                    foreach ($images as $image) {
                        if (($image != $adres) && (strstr($image, "_s.") !== False) && (strstr(substr($image, 0, strpos($image, ".")), "slider") !== TRUE) && (($ilsoc <= 6) !== FALSE)) {
                            echo '<form action="galeria.php" method="get" target="_blank" style="width: 180px; display: inline-block">'
                            . '<button class="ff btn-link" type="submit">'
                            . '<img src="' . $image . '" class="img-thumbnail form-inline"/>'
                            . '<input name="local" hidden="true" type="text" value="' . $local . '"/>'
                            . '<input name="image" hidden="true" type="text" value="' . substr($image, 0, strpos($image, "_")) . '"/>'
                            . '</button>'
                            . '</form>'
                            . $ilosc;
                            $ilosc ++;
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </body>
</html>

