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
            <th>Название</th>
            <th>Описание</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($genres)) {
            foreach ($genres as $genre) {
                ?>
                <tr>
                    <td><?= $genre['genrename'] ?></td>
                    <td><?= $genre['genredescription'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <a href="/genres/create" class="btn bg-primary">Добавить жанр</a>
</div>
