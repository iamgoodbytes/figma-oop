<?php
    namespace Figma;

    class Circle extends Shape {
        private int $radius;

        public function draw() {
            // draw a circle via CSS
            echo "<div style='width: {$this->radius}px; height: {$this->radius}px; background-color: {$this->color}; border-radius: 50%; position: absolute; left: {$this->x}px; top: {$this->y}px;'></div>";
        }
        /**
         * Get the value of radius
         */ 
        public function getRadius()
        {
                return $this->radius;
        }

        /**
         * Set the value of radius
         *
         * @return  self
         */ 
        public function setRadius($radius)
        {
                $this->radius = $radius;

                return $this;
        }
    }