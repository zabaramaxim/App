<?php
namespace App;

class User
{

    public string $login;
    public string $password;
    public string $email;
    public string $name;
    private static $salt = 'salt';


    function __construct($request){
        $this->login = $request['login'];
        $this->password = $request['password'];
        $this->email = $request['email'];
        $this->name = $request['name'];
    }

    
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function hashPassword(): string
    {
        return $this->password = hash('sha1',self::$salt . $this->password);
    }


}
