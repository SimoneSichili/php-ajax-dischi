<?php 
    include __DIR__ . "/db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="css/app.css">
    <title>Php Dischi</title>
</head>
<body>
    <!-- site container -->
    <div class="site-container" id="root">

        <!-- nav -->
        <?php include __DIR__ . "/partials/header.php" ?>
        <!-- nav -->

        <!-- main -->
        <main>
            <div class="wrapper">
                <div class="cards-container">
                    <div class="card" v-for="disc in discs">
                        <div class="card-top">
                            <img :src="disc.poster" :alt="disc.title">
                            <h3 class="title">{{ disc.title }}</h3>
                        </div>
                        <div class="card-bottom">
                            <span class="author">{{ disc.author }}</span>
                            <span class="year">{{ disc.year }}</span>
                        </div>
                    </div>
                </div> 
            </div>
        </main>
        <!-- /main -->

    </div>
    <!-- /site container -->

    <!-- my script -->
    <script src="js/script.js"></script>
</body>
</html>