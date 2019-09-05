<?php
/**
 * Created by PhpStorm.
 * File: index.php
 * Date: 2019-08-26
 * Time: 18:45
 */
?>
<code><?= __FILE__ ?></code>

<hr>
<div class="container">

    <?= $title ?>

    <ul class="nav nav-pills">
        <?php foreach ($menu as $menuitem): ?>
        <li><a href="<?=$menuitem['alias']?>"><?=$menuitem['menuitem']?></a></li>
        <?php endforeach; ?>
    </ul>

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
