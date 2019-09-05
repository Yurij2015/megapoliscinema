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
    <p class="lead">Добавление актера</p>
    <div class="col-md-6">
        <form action="/actors/add" method="post">
            <div class="form-group">
                <label for="actorname">ФИО актера</label>
                <input class="form-control" type="text" id="actorname" name="actorname" required autocomplete="off" >
            </div>
            <div class="form-group">
                <label for="actorinfo">Информация о актере</label>
                <textarea class="form-control" id="actorinfo" name="actorinfo" required autocomplete="off" ></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
