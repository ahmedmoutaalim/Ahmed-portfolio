<?php

class suggest{

    public function call(){
        
        global $pdo;

        $call = $pdo -> prepare("SELECT * FROM suggests");

        $call -> execute();

        return $call;

    }
}