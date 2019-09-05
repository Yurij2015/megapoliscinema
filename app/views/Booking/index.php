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
                    <td><?= $bookingitem['customers_idcustomer'] ?></td>
                    <td><?= $bookingitem['sessions_idsession'] ?></td>
                    <td><?= $bookingitem['cashiers_idcashier'] ?></td>
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
