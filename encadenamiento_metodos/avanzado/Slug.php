<?php
/**
 * Created by PhpStorm.
 * User: maycc
 * Date: 23/05/18
 * Time: 10:32
 */

namespace Avanzado;

class Slug
{

    public function render($originalString){

        $slug = str_replace(" ", "-", $originalString);
        // patrón lo que no cumple ejmpo:  ó la reemplaza con ""
        $slug = preg_replace('/[^\w\d\-\_]/i', "", $slug);

        return strtolower($slug);
    }

}