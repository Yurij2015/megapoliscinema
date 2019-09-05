<?php
/**
 * Created by PhpStorm.
 * File: index.php
 * Date: 2019-08-26
 * Time: 18:45
 */
?>
<!--<code>--><?//= __FILE__ ?><!--</code>-->

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
</div>
