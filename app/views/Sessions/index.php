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
            <th>Номер</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Фильм</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($sessions)) {
            foreach ($sessions as $session) {
                ?>
                <tr>
                    <td><?= $session['id'] ?></td>
                    <td><?= $session['sessiondate'] ?></td>
                    <td><?= $session['sessiontime'] ?></td>
                    <?php $movies = R::load('movies', $session['movies_idmovie']); ?>
                    <td><?= $movies->moviename ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <a href="/sessions/create" class="btn bg-primary">Добавить сеанс</a>
</div>
