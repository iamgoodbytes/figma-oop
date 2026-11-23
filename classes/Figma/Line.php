<?php
    namespace Figma;

    class Line extends Shape {
        use Traits\HasRotation;

        private int $length;
        private int $thickness = 2;

        public function setLength(int $length) {
            $this->length = $length;
            return $this;
        }

        public function setThickness(int $thickness) {
            $this->thickness = $thickness;
            return $this;
        }

        public function draw() {
            // a line is a thin div: width = length, height = thickness
            echo "<div class='shape' style='background-color: {$this->color}; width: {$this->length}px; height: {$this->thickness}px; left: {$this->x}px; top: {$this->y}px; {$this->rotationCss()}'></div>";
        }
    }
