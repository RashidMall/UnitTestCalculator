<?php

class Calculator{

    public function calculate($n){
        $result = $n;

        if($n === null || $n === ""){
            $result = '0';
        }else{
            $result = eval('return '.$n.';');
        }

        return $result;
    }
}
?>