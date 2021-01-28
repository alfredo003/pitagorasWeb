<?php

namespace app\model;

use app\core\Model;

/**
 * Undocumented class
 */
class SubscreverModel
{
    private $pdo;


    public function __construct()
    {
        $this->pdo = new Model;
    }

    public function insert(Object $params)
    {
        $sql = 'INSERT INTO `tbl_signup`(`email`) VALUES (:email)';
        $params = [
            'email' => $params->email
         ];

        if (!$this->pdo->executeNonQuery($sql, $params))
            return -1; // codigo de erro

        return $this->pdo->getLastID();
    }

    public function getAll($params)
    {
        $sql = 'SELECT * FROM `tbl_signup`';
        $dt = $this->pdo->executeQuery($sql);
        $listMessage = null;

        foreach ($dt as $dr)
            $listMessage[] = $this->collection($dr);

        return $listMessage;
    }


    private function collection($param)
    {
        return (object)[
            'id' => ['id'] ?? null,
            'email' => ['email'] ?? null
        ];
    }
}
