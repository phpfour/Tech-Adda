<?php

class UserRepository
{
    /**
     * @var Sparrow
     */
    protected $db;

    public function __construct(Sparrow $db)
    {
        $this->db = $db;
    }

    public function getUserByEmail($email)
    {
        return $this->db->from('users')
                    ->where('email = ', $this->db->escape($email))
                    ->one();
    }

    public function create($email) {

        return $this->db->from('users')
                    ->insert(array('email' =>  $this->db->escape($email)))
                    ->execute();
    }

}
