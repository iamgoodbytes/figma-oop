<?php
    namespace Figma;

    interface iShape {
        public function draw();
        public function setPosition(int $x, int $y);
        public function setColor(string $color);
    }