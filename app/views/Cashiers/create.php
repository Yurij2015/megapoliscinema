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
    <p class="lead">Добавление кассира</p>
    <div class="col-md-6">
        <form action="/cashiers/add" method="post">
            <div class="form-group">
                <label for="cashiername">ФИО кассира</label>
                <input class="form-control" type="text" id="cashiername" name="cashiername" required autocomplete="off" >
            </div>
            <div class="form-group">
                <label for="cashierphone">Номер телефона</label>
                <input class="form-control" id="cashierphone" name="cashierphone" required autocomplete="off" >
            </div>
            <div class="form-group">
                <label for="cashieraddres">Адрес</label>
                <input class="form-control" id="cashieraddres" name="cashieraddres" required autocomplete="off" >
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
