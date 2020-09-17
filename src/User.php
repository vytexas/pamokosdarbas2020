<?php

namespace userApp;


class User
{
    public $name;
    public $email;
    public $role;

    public function __construct($name, $email, $role) {

       $this->name = $name;
       $this->email = $email;
       $this->role = $role;
    }

    public function showProfile() {
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->role;
        return $data;
    }
}



?>