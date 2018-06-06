<?php

class Render
{
    protected $data = [];
    protected $build = '';

    public function words(array $data)
    {
        foreach ($data as $word) {
            $this->data[] = $word;
        }

        return $this;
    }

    public function link($character){

        foreach ($this->data as $word) {
            $this->build .= $word . $character;
        }

        return $this;
    }

    public function get(){
        return $this->build;
    }
}