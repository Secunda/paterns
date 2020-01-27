<?php

namespace Builder;

class SuperHouse implements HouseBuilder
{
    private $houseProperties = [];

    public function addDoors(int $doors)
    {
        $this->houseProperties['doors'] = $doors;
        return $this;
    }

    public function addWindows(int $windows)
    {
        $this->houseProperties['windows'] = $windows;
        return $this;
    }

    public function addWalls(int $walls)
    {
        $this->houseProperties['walls'] = $walls;
        return $this;
    }

    public function getHouse()
    {
        $house = array_map(
            function($numbers, $prop) {
                return $prop . "=" . $numbers . "; ";
            }, 
            array_values($this->houseProperties), 
            array_keys($this->houseProperties)
        );

        return implode('', $house);
    }
}