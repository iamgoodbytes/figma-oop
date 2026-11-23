<?php
    namespace Figma; 

    class Rectangle extends Shape {
        use Traits\HasRotation;

        private int $width;
        private int $height;

        public function setWidth(int $width) {
            $this->width = $width;
        }

        public function setHeight(int $height) {
            $this->height = $height;
        }

        public function draw() {
            echo "<div class='shape' style='background-color: {$this->color}; width: {$this->width}px; height: {$this->height}px; left: {$this->x}px; top: {$this->y}px; {$this->rotationCss()}'></div>";
        }
    }