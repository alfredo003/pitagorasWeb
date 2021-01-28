<?php

namespace app\model;

use app\core\Model;

/**
 * Undocumented class
 */
class FaleConoscoModel
{
    private $pdo;


    public function __construct()
    {
        $this->pdo = new Model;
    }

    public function insert(Object $params)
    {
        $sql = 'INSERT INTO `tbl_sms`(`full_name`, `email`, `sms`) VALUES (:fullname, :email, :sms)';
        $params = [
            'fullname' => $params->fullname,
            'email' => $params->email,
            'sms' => $params->message
        ];

        if (!$this->pdo->executeNonQuery($sql, $params))
            return -1; // codigo de erro

        return $this->pdo->getLastID();
    }

    public function getAll($params)
    {
        $sql = 'SELECT * FROM `tbl_sms`';
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
            'fullname' => ['fullname'] ?? null,
            'email' => ['email'] ?? null,
            'sms' => ['sms'] ?? null
        ];
    }
}
