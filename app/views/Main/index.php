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
    <?php
    if (!empty($posts)) {
        foreach ($posts as $post) {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <?= $post['name'] ?></h3>
                </div>
                <div class="panel-body">
                    <?= $post['content'] ?>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
