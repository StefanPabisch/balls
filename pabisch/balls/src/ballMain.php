<?php

namespace Pabisch\Balls;
    abstract class Ball
    {
        private $name;
        private $average;
        private $material;

        public function __construct(string $name, string $average, string $material)
        {
            $this->name = $name;
            $this->average = $average;
            $this->material = $material;
        }

        public function getName() : string
        {
            return $this->name;
        }

        public function getAverage() : string
        {
            return $this->average;
        }

        public function getMaterial() : string
        {
            return $this->material;
        }

        public function  __toString()
        {
            return "Name: " . $this->name . " | Durchmesser: " . $this->average . " | Material " . $this->material;
        }
    }