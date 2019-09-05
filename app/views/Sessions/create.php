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
    <p class="lead">Добавление сеанса</p>
    <div class="col-md-6">
        <form action="/sessions/add" method="post">
            <div class="form-group">
                <label for="sessiondate">Дата</label>
                <input class="form-control" type="date" id="sessiondate" name="sessiondate" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="sessiontime">Время</label>
                <input class="form-control" type="time" id="sessiontime" name="sessiontime" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="movies_idmovie">Кинофильм</label>
                <select class="form-control" id="movies_idmovie" name="movies_idmovie" required
                        autocomplete="off">
                    <?php
                    if (!empty($movies)) {
                        foreach ($movies as $movie) {
                            ?>
                            <option value="<?= $movie['id'] ?>"><?= $movie['moviename'] ?></option>
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
