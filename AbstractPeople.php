<?php

/**
 * Created by PhpStorm.
 * User: shtoorman
 * Date: 16.01.17
 * Time: 15:57
 */
abstract class AbstractPeople{

    private $name;
    private $age;
    private $email;
    private $gender;
    private $inWorkOrLearn;

    /**
     * @param $name
     * @param $age
     * @param $email
     * @param $gender
     */
    public function __const($name, $age, $email, $gender){
    $this->name = $name;
    $this->age = $age;
    $this->email = $email;
    $this->gender = $gender;
    }

    /**
     *
     */
    public function setInWorkOrLearn() {
    $whatDay = date("I");
    if (whatDay != "Satuday" and whatDay != "Sanday"){
        $this->inWorkOrLearn = true;
    }
    else{
        $this->inWorkOrLearn = false;
    }

    public function getInWorkOrLearn() {
        return $this->inWorkOrLearn;


    }

}
}