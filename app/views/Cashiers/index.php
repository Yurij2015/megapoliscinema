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
            <th>ФИО кассира</th>
            <th>Номер телефона</th>
            <th>Адрес</th>

        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($cashiers)) {
            foreach ($cashiers as $cashier) {
                ?>
                <tr>
                    <td><?= $cashier['cashiername'] ?></td>
                    <td><?= $cashier['cashierphone'] ?></td>
                    <td><?= $cashier['cashieraddres'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
    <a href="/cashiers/create" class="btn bg-primary">Добавить кассира</a>
</div>
