<?php

// namespace university;

require 'doctor.php';
require 'engineer.php';
require 'manager.php';


class university{

    private $doctor ;
    private $engineer ;
    private $manager ;

    public function __construct(){

        $this->doctor = new doctor();
        $this->engineer = new engineer();
        $this->manager = new manager();

    }

    public function start_day(){
        echo 'Started';
    }
}