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
            <th>Продолжительность</th>
            <th>Жанр</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($movies)) {
            foreach ($movies as $movie) {
                ?>
                <tr>
                    <td><?= $movie['moviename'] ?></td>
                    <td><?= $movie['moviedescription'] ?></td>
                    <td><?= $movie['duration'] ?></td>
                    <?php $genre = R::load('genres', $movie['genres_idgenre']); ?>
                    <td><?= $genre->genrename ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <a href="/movies/create" class="btn bg-primary">Добавить фильм</a>
</div>
