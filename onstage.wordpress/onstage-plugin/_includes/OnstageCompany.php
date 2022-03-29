<?php
    class OnstageCompany {
        public function __construct(String $name, String $description, OnstageAddress $mailingAddress, OnstageAddress $residentialAddress) {
            $this->name = $name;
            $this->description = $description;
            $this->mailingAddres = $mailingAddress;
            $this->residentialAddress = $residentialAddress;
        }

        protected $name;
        protected $description;

        public function getName() {
            return $this->name;
        }

        public function getResidentialAddress() {
            return $this->description;
        }
    }
