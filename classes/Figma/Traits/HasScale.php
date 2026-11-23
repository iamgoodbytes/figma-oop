<?php
    namespace Figma\Traits;

    trait HasScale {
        protected float $scale = 1.0;

        public function setScale(float $factor): static {
            $this->scale = $factor;
            return $this;
        }

        public function getScale(): float {
            return $this->scale;
        }

        protected function scaleCss(): string {
            return "transform: scale({$this->scale});";
        }
    }
