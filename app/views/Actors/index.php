<?php
/**
 * Project: megapoliscinema
 * Filename: index.php
 * Date: 05.09.2019
 * Time: 14:08
 */ ?>
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
    <a href="/actors/create" class="btn bg-primary">Добавить актера</a>
</div>
