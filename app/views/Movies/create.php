<?php
/**
 * Project: megapoliscinema
 * Filename: create.php
 * Date: 05.09.2019
 * Time: 17:18
 */
?>
<div class="container">
    <hr>
    <p class="lead">Добавление фильма</p>
    <div class="col-md-6">
        <form action="/movies/add" method="post">
            <div class="form-group">
                <label for="moviename">Название</label>
                <input class="form-control" type="text" id="moviename" name="moviename" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="moviedescription">Описание</label>
                <textarea class="form-control" id="moviedescription" name="moviedescription" required
                          autocomplete="off"></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Продолжительность</label>
                <input class="form-control" type="text" id="duration" name="duration" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="genres_idgenre">Жанр</label>
                <select class="form-control" id="genres_idgenre" name="genres_idgenre" required
                        autocomplete="off">
                    <?php
                    if (!empty($genres)) {
                        foreach ($genres as $genre) {
                            ?>
                            <option value="<?= $genre['id'] ?>"><?= $genre['genrename'] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
