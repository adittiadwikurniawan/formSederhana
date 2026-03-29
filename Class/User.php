<?php
class User {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    // method yang dijalankan saat object dibuat
    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    // method untuk mengambil data
    public function getData() {
        return [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'address' => $this->address
        ];
    }
}
?>