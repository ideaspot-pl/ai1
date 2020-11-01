<?php

function prepareTableHtml(array $users)
{
    ob_start();
    ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?= prepareTableUserRowHtml($user) ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php
    $html = ob_get_clean();
    return $html;
}

function prepareTableUserRowHtml(array $user)
{
    ob_start();
    ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstName'] ?></td>
            <td><?= $user['lastName'] ?></td>
        </tr>
    <?php
    $html = ob_get_clean();
    return $html;
}

$users = array(
    array(
        'id' => 1,
        'firstName' => 'Jon',
        'lastName' => 'Snow',
    ),
    array(
        'id' => 2,
        'firstName' => 'Eddard',
        'lastName' => 'Stark',
    ),
    array(
        'id' => 3,
        'firstName' => 'Arya',
        'lastName' => 'Stark',
    ),
);

$html = prepareTableHtml($users);
echo $html;
