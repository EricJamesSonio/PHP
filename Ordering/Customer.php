<?php

class Customer {
    private Id $id;

    function __construct(Id $id) {
        $this->id = $id;
    }

    

    function getId() {
        return $this->id;
    }
}

class Id {
    private bool $isPWD;
    private bool $isSenior;

    function __construct(bool $isPWD, bool $isSenior)
    {   
        $this->isPWD = $isPWD;
        $this->isSenior = $isSenior;
    }

    function getIsPWD() {
        return $this->isPWD;
    }

    function getIsSenior() {
        return $this->isSenior;
    }


}