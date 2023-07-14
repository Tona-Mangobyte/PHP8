<?php

class Country {
    public function __construct(public string $isoCode){}
}
class Address {
    public function __construct(public Country | null $country){}
    public function getCountry(): Country | null {
        return $this->country;
    }
}
class User {
    public function __construct(public Address | null $address){}

    public function getAddress(): Address | null {
        return $this->address;
    }
}

$user = new User(null);
echo $user->getAddress() ?->getCountry() ?->isoCode . PHP_EOL;

$user2 = new User(new Address(new Country("322")));
echo $user2->getAddress() ?->getCountry() ?->isoCode;