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
        $sql = 'INSERT INTO `tbl_speak_us`(`name`, `id_email`, `title`, `message`) VALUES (:fullname, :id_email, :title, :sms)';
        $params = [
            'fullname' => $params->fullname,
            'id_email' => $params->id_email,
            'title' => $params->title,
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
