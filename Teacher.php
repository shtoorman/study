<?php

/**
 * Created by PhpStorm.
 * User: shtoorman
 * Date: 16.01.17
 * Time: 16:07
 */


public class Teacher extends People{
    $workingHours;

    /**
     * Teacher constructor.
     * @param $name
     * @param $age
     * @param $email
     * @param $gender
     * @param $workingHours
     */
    public function __construct($name, $age, $email, $gender, $workingHours){
        parent::__construct($name, $age, $email, $gender);
        /** @var TYPE_NAME $this */
        if (!empty($this->workingHours)) {
            $this->workingHours;
        }


    }



}




?>