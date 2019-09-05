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
    <p class="lead">Добавление посетителя</p>
    <div class="col-md-6">
        <form action="/customers/add" method="post">
            <div class="form-group">
                <label for="namecustomer">ФИО посетителя</label>
                <input class="form-control" type="text" id="namecustomer" name="namecustomer" required autocomplete="off" >
            </div>
            <div class="form-group">
                <label for="phonecustomer">Номер телефона</label>
                <input class="form-control" id="phonecustomer" name="phonecustomer" required autocomplete="off" >
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>
        </form>
    </div>
</div>
