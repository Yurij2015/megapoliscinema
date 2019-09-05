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
    <p class="lead">Добавление жанра</p>
    <div class="col-md-6">
        <form action="/genres/add" method="post">
            <div class="form-group">
                <label for="genrename">Наименование</label>
                <input class="form-control" type="text" id="genrename" name="genrename" required autocomplete="off" >
            </div>
            <div class="form-group">
                <label for="genredescription">Описание</label>
                <input class="form-control" id="genredescription" name="genredescription" required autocomplete="off" >
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
