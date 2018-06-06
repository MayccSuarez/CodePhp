<?php

$greet = function ($name){
    return "Hola... $name";
};

// echo $greet("Maycc");

$greetMale = function ($name){
    return "Hola hombre... $name";
};

$greetFemale= function ($name){
    return "Hola mujer... $name";
};

// Closure exigir un tipo de dato en concreto
function greet(Closure $closure, $name){
    return $closure($name);
}

echo greet($greetMale, "Maycc");
echo '<br>';
echo greet($greetFemale, "Maria");
echo '<br>';
echo greet($greetFemale, 4);
