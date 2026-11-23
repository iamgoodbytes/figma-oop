<?php
    namespace Figma;

    class Triangle extends Shape {
        use Traits\HasScale;

        private int $base;
        private int $height;

        public function setBase(int $base) {
            $this->base = $base;
            return $this;
        }

        public function setHeight(int $height) {
            $this->height = $height;
            return $this;
        }

        public function draw() {
            // draw a triangle via CSS clip-path
            echo "<div class='shape' style='background-color: {$this->color}; width: {$this->base}px; height: {$this->height}px; left: {$this->x}px; top: {$this->y}px; clip-path: polygon(50% 0, 0 100%, 100% 100%); {$this->scaleCss()}'></div>";
        }
    }
