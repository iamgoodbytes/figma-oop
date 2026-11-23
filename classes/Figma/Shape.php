<?php
    namespace Figma;

     abstract class Shape implements iShape {
        protected string $color;
        protected int $x;
        protected int $y;

        public function setPosition(int $x, int $y) {
            $this->x = $x;
            $this->y = $y;
        }

        public function getPosition(): array {
            return [$this->x, $this->y];
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor(string $color)
        {
                $this->color = $color;
                return $this;
        }
    }