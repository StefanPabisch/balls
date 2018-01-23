<?php

namespace Pabisch\Balls;
    class CreateBall extends Ball implements BallInterface
    {
        public function __construct(string $name, string $average, string $material, string $farbe)
        {
            parent::__construct($name, $average, $material, $farbe);
        }

        public function getVolume() : float
        {
            return ((4*pi()*($this->getAverage()/2)^3)/3);
        }

        public function __toString() : string
        {
            return "Debug: " . parent::__toString() . " | Flächeninhalt " . $this->getVolume();
        }

        public function anzBall() : string
        {
            $ball = new CreateBall();

            $help = $this->getVolume();
        }
    }