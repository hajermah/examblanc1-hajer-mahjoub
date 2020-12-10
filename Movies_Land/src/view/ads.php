<?php
include(__DIR__."./header.php");

foreach ($this->adsList as $ad){
    ?>
    <div class="card">
        <div class="card-header">
            <?php echo $ad['ads_title']?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Liste des films</a>

        </div>
    </div>
    <?php
}

include(__DIR__."./footer.php");