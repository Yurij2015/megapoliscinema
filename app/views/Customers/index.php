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
            <th>ФИО посетителя</th>
            <th>Номер телефона</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($customers)) {
            foreach ($customers as $customer) {
                ?>
                <tr>
                    <td><?= $customer['namecustomer'] ?></td>
                    <td><?= $customer['phonecustomer'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <a href="/customers/create" class="btn bg-primary">Добавить посетителя</a>
</div>
