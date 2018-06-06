<?php

require_once 'Render.php';

$sentence = new Render;

echo $sentence->words(["programacion", "orientada", "a", "objetos"])
    ->link("-")
    ->get();