<?php
/**
 * Created by PhpStorm.
 * User: maycc
 * Date: 23/05/18
 * Time: 10:32
 */

namespace Avanzado;

require 'Slug.php';


/*
 * Render es la conección con cada clase individual
 */
class Render
{

    public function sanitize(){

        $slug = new Slug;

        return $slug;
    }

}