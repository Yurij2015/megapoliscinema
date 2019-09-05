<?php
/**
 * Created by PhpStorm.
 * File: index.php
 * Date: 2019-08-26
 * Time: 18:45
 */
?>
<!--<code>--><?//= __FILE__ ?><!--</code>-->

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
</div>
