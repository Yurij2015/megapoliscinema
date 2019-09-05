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
            <th>Дата</th>
            <th>Посетитель</th>
            <th>Сеанс</th>
            <th>Кассир</th>

        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($booking)) {
            foreach ($booking as $bookingitem) {
                ?>
                <tr>
                    <td><?= $bookingitem['date'] ?></td>
                    <?php $customers = R::load('customers', $bookingitem['customers_idcustomer']); ?>
                    <td><?= $customers->namecustomer; ?></td>

                    <?php $sessions = R::load('sessions', $bookingitem['sessions_idsession']); ?>
                    <?php $movies = R::load('movies', $sessions['movies_idmovie']); ?>
                    <td><?= $sessions->sessiondate . " " . $sessions->sessiontime . " " . $movies->moviename ?></td>

                    <?php $cashiers = R::load('cashiers', $bookingitem['cashiers_idcashier']); ?>
                    <td><?= $cashiers->cashiername ?></td>
                </tr>
                <?php $customers = R::load('customers', $bookingitem['customers_idcustomer']);
//               var_dump($customers);
                $customer = $customers->namecustomer;
                ?>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <?php //var_dump($booking) ?>
    <a href="/booking/create" class="btn bg-primary">Добавить бронь</a>
</div>
