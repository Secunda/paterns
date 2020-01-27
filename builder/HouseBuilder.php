<?php

namespace Builder;

interface HouseBuilder {
    public function addDoors(int $doors);

    public function addWindows(int $windows);

    public function addWalls(int $walls);

    public function getHouse();
}