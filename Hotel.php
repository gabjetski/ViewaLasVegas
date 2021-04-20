<?php
namespace TYPO3Fluid\Fluid;
class Hotel{
    private string $hotelName;
    
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name){
        $this->name = $name;
    }
}