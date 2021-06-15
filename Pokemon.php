<?php

class Pokemon {

    protected $Name;
    public $Type;
    public $HP;
    public $Attacks;
    public $Weakness;
    public $Resistance;
    public $Target;

    public function __construct($Name, $Type, $HP, $Attacks, $Weakness, $Resistance, $Target)
    {
        $this->Name = $Name;
        $this->Type = $Type;
        $this->HP = $HP;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
        $this->Target = $Target;
    }

    public function __toString() {
        return json_encode($this);
    }

    function getName() {
        return $this->Name;
    }

    function setName($NewName) {
        $this->Name = $NewName;
    }

    function getHP() {
        return $this->HP . ' HitPoints';
    }

    public function Attack($target, $AttackNmbr) {
        echo $this->Name . ' Attacks ' . $target->getName() . ' ';
        $target->Damagereceive(20);
    }

    public function Damagereceive($amountDamage) {
        echo $this->Name . ' receives damage :' . $amountDamage;
    }

}