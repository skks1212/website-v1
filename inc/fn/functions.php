<?php   
    function myAge(){
        $time = time();
        $year = date("Y", time());
        $birth = 2003;
        $age = $year - $birth;
        return $age;
    }