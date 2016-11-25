<?php

namespace spl;

class Direction extends \SplEnum {
    const NORTH = "NORTH";
    const EAST = "EAST";
    const SOUTH = "SOUTH";
    const WEST = "WEST";

    const __default = self::NORTH;
}
