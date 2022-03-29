<?php
class OnstageAddress {
    public function __construct(String $addressline1, String $addressline2) {
        $this->addressline1 = $addressline1;
        $this->addressline2 = $addressline2;
    }

    protected $addressline1;
    protected $addressline2;

    public function getAddressline1() {
        return $this->addressline1;
    }

    public function getAddressline2() {
        return $this->addressline2;
    }
}
