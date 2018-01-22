<?php

namespace Pabisch\Balls;
    class CreateBall extends Ball implements BallInterface
    {
        public function __construct(string $name, string $average, string $material)
        {
            parent::__construct($name, $average, $material);
        }

        public function getVolume() : float
        {
            return ((4*pi()*($this->getAverage()/2)^3)/3);
        }

        public function __toString() : string
        {
            return parent::__toString() . " | Flächeninhalt " . $this->getVolume();
        }
    }