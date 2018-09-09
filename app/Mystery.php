<?php

class Mystery{

    private $randomNumber;
    private $tries;

    public function checkInput($nb){
        $nb = (int) $nb;
        $random = $this->getRandomNumber();
        if($nb > $random){
            return 'moins';
        }elseif($nb < $random){
            return 'plus';
        }else{
            return 'You won! thes secret number was ' . $random;
        }
    }

    public function isGameOver($tries){
        if($tries > 3){
            return true;
        }else{
            return false;
        }
    }

    public function getRandomNumber(){
        return $this->randomNumber;
    } 

    public function setRandomNumber(){
        $this->randomNumber = rand(0, 10);
    }

    public function getTries(){
        return $this->tries;
    }

    public function setTries($tries){
        $this->tries = $tries;
    }
}
?>