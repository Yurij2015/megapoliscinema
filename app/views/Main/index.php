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
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ФИО актера</th>
            <th>Дополнительная информация</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($actors)) {
            foreach ($actors as $actor) {
                ?>
                <tr>
                    <td><?= $actor['actorname'] ?></td>
                    <td><?= $actor['actorinfo'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
