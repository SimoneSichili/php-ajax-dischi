<main>
    <div class="wrapper">
        <div class="cards-container">
            <?php  foreach ($discs as $disc) { ?>
                <div class="card">
                    <div class="card-top">
                        <img src="<?php echo $disc["poster"]; ?>" alt="<?php echo $disc["title"]; ?>">
                        <h3 class="title"><?php echo $disc["title"]; ?></h3>
                    </div>
                    <div class="card-bottom">
                        <span class="author"><?php echo $disc["author"]; ?></span>
                        <span class="year"><?php echo $disc["year"]; ?></span>
                    </div>
                </div>
            <?php } ?>
        </div> 
    </div>
</main>