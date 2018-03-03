<?php

class Validateur
{

    private $data;
    private $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    private function getField($field)
    {
        if (!isset($this->data[$field])) {
            return null;
        }
        return $this->data[$field];
    }


    public function isUniq($field, $db, $errormsg){
        $req = $db->queryList("SELECT id from user WHERE $field = ?", [$this->getField($field)])->fetch();
        if ($req){
            $this->errors[$field] = $errormsg;
        }
    }


    public function isValid()
    {
        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}