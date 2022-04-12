<div class="cards-grid"><?php

    foreach ($arr_dischi as $disco) { ?>

        <div class="disc-card">
            <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
            <h2><?= $disco['title'] ?></h2>
            <h3><?= $disco['author'] ?></h3>
            <small><?= $disco['year'] ?></small>
        </div><?php

    }?>
</div>
