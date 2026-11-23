<?php
    namespace Figma\Traits;

    trait HasRotation {
        protected int $rotation = 0;

        public function setRotation(int $degrees): static {
            $this->rotation = $degrees;
            return $this;
        }

        public function getRotation(): int {
            return $this->rotation;
        }

        protected function rotationCss(): string {
            return "transform: rotate({$this->rotation}deg);";
        }
    }
