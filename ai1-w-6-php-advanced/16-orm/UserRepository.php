<?php

require_once __DIR__ . '/../config.php';
global $config;

require_once __DIR__ . '/User.php';

class UserRepository
{
    /**
     * @param $id
     * @return null|User
     * @throws Exception
     */
    public function findById($id)
    {
        global $config;

        $pdo = new PDO($config['dsn'], $config['username'], $config['password']);

        $sql = "SELECT * FROM user WHERE id = :id";
        $statement = $pdo->prepare($sql);

        $result = $statement->execute(array('id' => $id));
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if (! $row) {
            return null;
        }

        $user = new User();
        $user
            ->setId($row['id'])
            ->setUsername($row['username'])
            ->setFirstName($row['firstName'])
            ->setLastName($row['lastName']);

        return $user;
    }
}
