<?php
include_once ROOT.'/controllers/samsungController.php';
//var_dump($resultOfall);
$json = json_encode($resultOfall);
//var_dump($json);
//die;
?>
<script>
    console.log(<?php echo $json ?>);
</script>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>Sick slider</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>		 -->

</head>
<body>

<main class="content">
    <div class="wrapper">
        <div class="slider">
            <div class="full">
                <div>
                    <h3>Samsung 12</h3>
                    <p style=" margin-bottom:0px;width: 122px; float: left">Голубой</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            20%
                        </div>

                    </div>
                    <p style=" margin-bottom:0px;width: 122px; float: left">Голубой</p>
                    <div class="progress">

                        <div class="progress-bar progress-bar-warning" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">

                        </div>

                    </div>
                </div>
            </div>

            <div class="arrow"></div>
        </div>
</main>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js" ></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/custom.js" ></script>
</body>
</html>
