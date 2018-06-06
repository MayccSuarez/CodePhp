<?php

class Person
{
     var $name;
     var $lastName;

    function __construct($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    function greet(){
        return "Hola soy $this->name";
    }

}
