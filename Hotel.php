<?php

class Hotel{
    private string $name;
    
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name){
        $this->name = $name;
    }
}