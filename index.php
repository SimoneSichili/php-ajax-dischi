<?php 
    include __DIR__ . "/db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->
    <!-- vue axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.js" integrity="sha512-bYkaBWaFtfPIMYt9+CX/4DWgfrjcHinjerNYxQmQx1VM76eUsPPKZa5zWV8KksVkBF/DaHSADCwil2J5Uq2ctA==" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="css/app.css">
    <title>Php Dischi</title>
</head>
<body>
    <!-- site container -->
    <div class="site-container">

        <!-- nav -->
        <?php include __DIR__ . "/partials/header.php" ?>
        <!-- nav -->

        <!-- main -->
        <?php include __DIR__ . "/partials/main.php" ?>
        <!-- /main -->

    </div>
    <!-- /site container -->
</body>
</html>