<?php

class Scholarship {
    
    private $id;
    private $name;
    private $amount;
    private $deadline;
    private $detail;

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getamount() {
        return $this->amount;
    }
    public function getdeadline() {
        return $this->deadline;
    }
    public function getdetail() {
        return $this->detail;
    }
    public function setId($id) {
        $this->id = id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setAmount($amount) {
        $this->amount = $amount;
    }
    public function setDeadline($deadline) {
        $this->deadline = $deadline;
    }
    public function setDetail($detail) {
        $this->detail = $detail;
    }
}