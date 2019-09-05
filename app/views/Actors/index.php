<?php
/**
 * Project: megapoliscinema
 * Filename: index.php
 * Date: 05.09.2019
 * Time: 14:08
 */ ?>
<div class="container">
    <?php
    if (!empty($actors)) {
        foreach ($actors as $actor) {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <?= $actor['actorname'] ?></h3>
                </div>
                <div class="panel-body">
                    <?= $actor['actorinfo'] ?>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <a href="/actors/create" class="btn bg-primary">Добавить актера</a>
</div>
