<?php

trait Color {
    public function setColor($color)
    {
        if (gettype($color) == 'string')
            $this->color = $color;
    }
}