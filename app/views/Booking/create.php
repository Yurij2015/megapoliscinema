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
    <p class="lead">Добавление брони</p>
    <div class="col-md-6">
        <form action="/booking/add" method="post">
            <div class="form-group">
                <label for="date">Дата</label>
                <input class="form-control" type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="customers_idcustomer">Посетитель</label>
                <select class="form-control" id="customers_idcustomer" name="customers_idcustomer" required
                        autocomplete="off">
                    <?php
                    if (!empty($customers)) {
                        foreach ($customers as $customer) {
                            ?>
                            <option value="<?= $customer['id'] ?>"><?= $customer['namecustomer'] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="sessions_idsession">Сеанс</label>
                <select class="form-control" id="sessions_idsession" name="sessions_idsession" required
                        autocomplete="off">
                    <?php
                    if (!empty($sessions)) {
                        foreach ($sessions as $session) {
                            ?>
                            <?php $movies = R::load('movies', $session['movies_idmovie']); ?>
                            <option value="<?= $session['id'] ?>"><?= $session['sessiondate'] . " " . $session['sessiontime'] . " " . $movies->moviename ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="cashiers_idcashier">Кассир</label>
                <select class="form-control" id="cashiers_idcashier" name="cashiers_idcashier" required
                        autocomplete="off">
                    <?php
                    if (!empty($cashiers)) {
                        foreach ($cashiers as $cashier) {
                            ?>
                            <option value="<?= $cashier['id'] ?>"><?= $cashier['cashiername'] ?></option>
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
